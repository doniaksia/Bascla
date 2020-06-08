package com.mycompany.myapp.velo.entites;

public class Categorie {
    
    private int id;
    private String name;
    private int nombre_evenements;
    
    public Categorie(String name) {
        this.name = name;
    }

    public Categorie(int id, String name) {
        this.id = id;
        this.name = name;
    }
    
    public Categorie(int id, String name, int nombre_evenements) {
        this.id = id;
        this.name = name;
        this.nombre_evenements=nombre_evenements;
    }
    
    public Categorie() {
    }

    public int getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    public int getNombre_evenements() {
        return nombre_evenements;
    }
 
    
    public void setId(int id) {
        this.id = id;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setNombre_evenements(int nombre_evenements) {
        this.nombre_evenements = nombre_evenements;
    }
    
    @Override
    public int hashCode() {
        int hash = 3;
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
        final Categorie other = (Categorie) obj;
        if (this.id != other.id) {
            return false;
        }
        return true;
    }
    
    
}
