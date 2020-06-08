package com.mycompany.myapp.velo.entites;

import java.util.Date;
import java.util.HashSet;
import com.mycompany.myapp.Utilisateur;

    public class Velo {
        private int id=0;
        private String titre="";
        private Date date;
        private String url_image="" ;
        private String description="";
        private double prix=0;
         private double longt=0;
          private double altd=0;
        private String adresse="";
        private int billets_restants;
        private int disponibilite;
         private String username="";
        private String latLng;
        private Date date_modification;
        private Utilisateur utilisateur;
        
        private HashSet<Categorie> listCategories;
        private HashSet<Inscription> listInscriptions;
    
    public Velo(int id, String titre, Date date, String url_image, String description, double prix, String adresse, int billets_restants, int disponibilite, Date date_modification, Utilisateur utilisateur,double altd,double longt) {
       
        this.longt=longt;
        this.altd=altd;
        this.id = id;
        this.titre = titre;
        this.date = date;
        this.url_image=url_image;
        this.description = description;
        this.prix = prix;
        this.adresse = adresse;
        this.billets_restants = billets_restants;
        this.disponibilite = disponibilite;
        this.date_modification = date_modification;
        this.utilisateur=utilisateur;
       
        listCategories = new HashSet<>();
        listInscriptions= new HashSet<>();
    }
    
    public Velo(int id, String titre, Date date, String url_image, String description, double prix, String adresse, int billets_restants, int disponibilite, Date date_modification) {
        this.id = id;
        this.titre = titre;
        this.date = date;
        this.url_image=url_image;
        this.description = description;
        this.prix = prix;
        this.adresse = adresse;
        this.billets_restants = billets_restants;
        this.disponibilite = disponibilite;
        this.date_modification = date_modification;
        
        listCategories = new HashSet<>();
        listInscriptions= new HashSet<>();
    }
    
    public Velo( String titre, Date date, String url_image, String description, double prix, String adresse, int billets_restants, Utilisateur utilisateur) {
        this.titre = titre;
        this.date = date;
        this.url_image=url_image;
        this.description = description;
        this.prix = prix;
        this.adresse = adresse;
        this.billets_restants = billets_restants;
        this.utilisateur= utilisateur;
        
        listCategories = new HashSet<>();
        listInscriptions= new HashSet<>();
    }
        

    public Velo() {
        
        listCategories = new HashSet<>();
        listInscriptions= new HashSet<>();
    }

    public int getId() {
        return id;
    }

    public String getTitre() {
        return titre;
    }

    public Date getDate() {
        return date;
    }

    public String getUrl_image() {
        return url_image;
    }
   
    public String getDescription() {
        return description;
    }

    public double getPrix() {
        return prix;
    }

    public String getAdresse() {
        return adresse;
    }
    public String getusername() {
        return username;
    }

    public int getBillets_restants() {
        return billets_restants;
    }

    public int getDisponibilite() {
        return disponibilite;
    }

    public Date getDate_modification() {
        return date_modification;
    }

    public Utilisateur getUtilisateur() {
        return utilisateur;
    }
    
    
  

    public HashSet<Categorie> getListCategories() {
        return listCategories;
    }
    
    public HashSet<Inscription> getListInscriptions() {
        return listInscriptions;
    }
    
    public void setId(int id) {
        this.id = id;
    }
public void setusername(String username) {
        this.username = username;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public void setUrl_image(String url_image) {
        this.url_image = url_image;
    }
    
    public void setDescription(String description) {
        this.description = description;
    }

    public void setPrix(double prix) {
        this.prix = prix;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public void setBillets_restants(int billets_restants) {
        this.billets_restants = billets_restants;
    }

    public void setDisponibilite(int disponibilite) {
        this.disponibilite = disponibilite;
    }

    public void setDate_modification(Date date_modification) {
        this.date_modification = date_modification;
    }

    public void setUtilisateur(Utilisateur utilisateur) {
        this.utilisateur = utilisateur;
    }
    
    

    
    public void setListCategories(HashSet<Categorie> listCategories) {
        this.listCategories = listCategories;
    }

    public void setListInscriptions(HashSet<Inscription> listInscriptions) {
        this.listInscriptions = listInscriptions;
    }

    public String getLatLng() {
        return latLng;
    }

    public void setLatLng(String latLng) {
        this.latLng = latLng;
    }
    
    

    
    
    public void addCategorie (Categorie categorie){
        if(!this.listCategories.contains(categorie))
            this.listCategories.add(categorie);
    }

    public void removeCategorie (Categorie categorie){
        this.listCategories.remove(categorie);
    }
    
    public void addInscription (Inscription inscription){
        if(!this.listInscriptions.contains(inscription))
            this.listInscriptions.add(inscription);
    }

    public void removeInscription (Inscription inscription){
        this.listInscriptions.remove(inscription);
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 17 * hash + this.id;
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Velo other = (Velo) obj;
        if (this.id != other.id) {
            return false;
        }
        return true;
    }
    
    @Override 
    public String toString(){
        return "///"+titre+"///"+adresse+"///"+date.toString()+"////"+utilisateur.getId()+"///"+prix+"///"+billets_restants;
    } 

    /**
     * @return the longt
     */
    public double getLongt() {
        return longt;
    }

    /**
     * @param longt the longt to set
     */
    public void setLongt(double longt) {
        this.longt = longt;
    }

    /**
     * @return the altd
     */
    public double getAltd() {
        return altd;
    }

    /**
     * @param altd the altd to set
     */
    public void setAltd(double altd) {
        this.altd = altd;
    }
    
}