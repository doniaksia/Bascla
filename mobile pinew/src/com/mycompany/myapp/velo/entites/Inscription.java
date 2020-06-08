package com.mycompany.myapp.velo.entites;

import java.util.Date;
import com.mycompany.myapp.Utilisateur;

public class Inscription {
    
    private int id;
    private Velo evenement;
    private Utilisateur utilisateur;
    private Date dateInscription;

    public Inscription(int id, Velo evenement, Utilisateur utilisateur, Date dateInscription) {
        this.id = id;
        this.evenement = evenement;
        this.utilisateur = utilisateur;
        this.dateInscription = dateInscription;
    }
    
    public Inscription( Velo evenement, Utilisateur utilisateur) {
        this.evenement = evenement;
        this.utilisateur = utilisateur;
    }
    
    public Inscription(){}

    public Inscription(Velo evenement) {
        this.evenement= evenement;
    }

    public int getId() {
        return id;
    }

    public Velo getEvenement() {
        return evenement;
    }

    public Utilisateur getUtilisateur() {
        return utilisateur;
    }

    public Date getDateInscription() {
        return dateInscription;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setEvenement(Velo evenement) {
        this.evenement = evenement;
    }

    public void setUtilisateur(Utilisateur utilisateur) {
        this.utilisateur = utilisateur;
    }

    public void setDateInscription(Date dateInscription) {
        this.dateInscription = dateInscription;
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 37 * hash + this.id;
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
        final Inscription other = (Inscription) obj;
        if (this.id != other.id) {
            return false;
        }
        return true;
    }
    
    
}
