<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class NewsManagerPDO extends NewsManager
{
    /**
    * Attribut contenant l'instance représentant la BDD.
    * @type PDO
    */
    protected $db;

    /**
    * Constructeur étant chargé d'enregistrer l'instance de PDO dans l'attribut $db.
    * @param $db PDO Le DAO
    * @return void
    */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
    * @see NewsManager::add()
    */
    protected function add(News $news)
    {
        $requete = $this->db->prepare('INSERT INTO news2 SET auteur = :auteur, titre = :titre, contenu = :contenu, dateAjout = NOW(), dateModif = NOW()');

        $requete->bindValue(':titre', $news->titre());
        $requete->bindValue(':auteur', $news->auteur());
        $requete->bindValue(':contenu', $news->contenu());

        $requete->execute();
    }

    /**
    * @see NewsManager::count()
    */
    public function count()
    {
        return $this->db->query('SELECT COUNT(*) FROM news2')->fetchColumn();
    }

    /**
    * @see NewsManager::delete()
    */
    public function delete($id)
    {
        $this->db->exec('DELETE FROM news2 WHERE id = '.(int) $id);
    }

    /**
    * @see NewsManager::getList()
    */
    public function getList($debut = -1, $limite = -1)
    {
        $sql = 'SELECT id, auteur, titre, contenu, dateAjout, dateModif FROM news2 ORDER BY id DESC';

        // On vérifie l'intégrité des paramètres fournis.
        if ($debut != -1 || $limite != -1)
        {
            $sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
        }

        $requete = $this->db->query($sql);
        $requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'News');

        $listeNews = $requete->fetchAll();

        // On parcourt notre liste de news pour pouvoir placer des instances de DateTime en guise de dates d'ajout et de modification.
        foreach ($listeNews as $news)
        {
            $news->setDateAjout(new DateTime($news->dateAjout()));
            $news->setDateModif(new DateTime($news->dateModif()));
        }

        $requete->closeCursor();

        return $listeNews;
    }

    /**
    * @see NewsManager::getUnique()
    */
    public function getUnique($id)
    {
        $requete = $this->db->prepare('SELECT id, auteur, titre, contenu, dateAjout, dateModif FROM news2 WHERE id = :id');
        $requete->bindValue(':id', (int) $id, PDO::PARAM_INT);
        $requete->execute();

        $requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'News');

        $news = $requete->fetch();

        $news->setDateAjout(new DateTime($news->dateAjout()));
        $news->setDateModif(new DateTime($news->dateModif()));

        return $news;
    }

    /**
    * @see NewsManager::update()
    */
    protected function update(News $news)
    {
        $requete = $this->db->prepare('UPDATE news2 SET auteur = :auteur, titre = :titre, contenu = :contenu, dateModif = NOW() WHERE id = :id');

        $requete->bindValue(':titre', $news->titre());
        $requete->bindValue(':auteur', $news->auteur());
        $requete->bindValue(':contenu', $news->contenu());
        $requete->bindValue(':id', $news->id(), PDO::PARAM_INT);

        $requete->execute();
    }
}