<?php

class PublicModel extends Driver{

    public function findParfByCat(Parfum $parfum){

        $sql = "SELECT * FROM parfum p
        INNER JOIN categorie c
        ON p.id_cat = c.id_cat
        WHERE p.id_cat=:id";

        $result = $this->getRequest($sql, ["id"=>$parfum->getCategorie()->getId_cat()]);

        $rows = $result->fetchAll(PDO::FETCH_OBJ);
        $parfums = [];
        foreach($rows as $row){

            $newParfum = new Parfum();

            $newParfum->setId_p($row->id_p);
            $newParfum->setMarque($row->marque);
            $newParfum->setModele($row->modele);
            $newParfum->setPrix($row->prix);
            $newParfum->setQuantite($row->quantite);
            $newParfum->setImage($row->image);
            $newParfum->setDescription($row->description);
            $newParfum->getCategorie()->setId_cat($row->id_cat);
            $newParfum->getCategorie()->setNom_cat($row->nom_cat);

            array_push($parfums, $newParfum);

        }
        return $parfums;
    }
    public function updateStock(Parfum $p){
        $sql = "UPDATE parfum SET quantite = :quantite WHERE id_p = :id";
        $result = $this->getRequest($sql, ['quantite'=>$p->getQuantite(), 'id'=>$p->getId_p()]);
        return $result->rowCount();
    }
}