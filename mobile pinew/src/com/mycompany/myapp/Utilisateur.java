package com.mycompany.myapp;

import java.util.Date;

public class Utilisateur {
    
    private int id;
    private String username;
    private String username_canonical;
    private String email;
    private String email_canonical;
    private int enabled;
    private String salt;
    private String password;
    private Date last_login;
    private String confirmation_token;
    private Date password_requested_at;
    private String roles;
    private String nom_prenom;
    private Date date_naissance;
    private int sexe;
    private int numero_telephone;
    private String adresse;
    private String description;
    private String url_photo_profil;
    private Date date_inscription;

    public Utilisateur(int id, String username, String username_canonical, String email, String email_canonical, int enabled, String salt, String password, Date last_login, String confirmation_token, Date password_requested_at, String roles, String nom_prenom, Date date_naissance, int sexe, int numero_telephone, String adresse, String description, String url_photo_profil, Date date_inscription) {
        this.id = id;
        this.username = username;
        this.username_canonical = username_canonical;
        this.email = email;
        this.email_canonical = email_canonical;
        this.enabled = enabled;
        this.salt = salt;
        this.password = password;
        this.last_login = last_login;
        this.confirmation_token = confirmation_token;
        this.password_requested_at = password_requested_at;
        this.roles = roles;
        this.nom_prenom = nom_prenom;
        this.date_naissance = date_naissance;
        this.sexe = sexe;
        this.numero_telephone = numero_telephone;
        this.adresse = adresse;
        this.description = description;
        this.url_photo_profil = url_photo_profil;
        this.date_inscription = date_inscription;
    }

    public Utilisateur(String username, String username_canonical, String email, String email_canonical, int enabled, String salt, String password, Date last_login, String confirmation_token, Date password_requested_at, String roles, String nom_prenom, Date date_naissance, int sexe, int numero_telephone, String adresse, String description, String url_photo_profil, Date date_inscription) {
        this.username = username;
        this.username_canonical = username_canonical;
        this.email = email;
        this.email_canonical = email_canonical;
        this.enabled = enabled;
        this.salt = salt;
        this.password = password;
        this.last_login = last_login;
        this.confirmation_token = confirmation_token;
        this.password_requested_at = password_requested_at;
        this.roles = roles;
        this.nom_prenom = nom_prenom;
        this.date_naissance = date_naissance;
        this.sexe = sexe;
        this.numero_telephone = numero_telephone;
        this.adresse = adresse;
        this.description = description;
        this.url_photo_profil = url_photo_profil;
        this.date_inscription = date_inscription;
    }

    public Utilisateur(int id, String username, String email, String nom_prenom, String url_photo_profil, int numero_telephone) {
        this.id = id;
        this.username = username;
        this.email=email;
        this.nom_prenom = nom_prenom;
        this.url_photo_profil = url_photo_profil;
        this.numero_telephone= numero_telephone;
    }

    public Utilisateur() {}

    public int getId() {
        return id;
    }

    public String getUsername() {
        return username;
    }

    public String getUsername_canonical() {
        return username_canonical;
    }

    public String getEmail() {
        return email;
    }

    public String getEmail_canonical() {
        return email_canonical;
    }

    public int getEnabled() {
        return enabled;
    }

    public String getSalt() {
        return salt;
    }

    public String getPassword() {
        return password;
    }

    public Date getLast_login() {
        return last_login;
    }

    public String getConfirmation_token() {
        return confirmation_token;
    }

    public Date getPassword_requested_at() {
        return password_requested_at;
    }

    public String getRoles() {
        return roles;
    }

    public String getNom_prenom() {
        return nom_prenom;
    }

    public Date getDate_naissance() {
        return date_naissance;
    }

    public int getSexe() {
        return sexe;
    }

    public int getNumero_telephone() {
        return numero_telephone;
    }

    public String getAdresse() {
        return adresse;
    }

    public String getDescription() {
        return description;
    }

    public String getUrl_photo_profil() {
        return url_photo_profil;
    }

    public Date getDate_inscription() {
        return date_inscription;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public void setUsername_canonical(String username_canonical) {
        this.username_canonical = username_canonical;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public void setEmail_canonical(String email_canonical) {
        this.email_canonical = email_canonical;
    }

    public void setEnabled(int enabled) {
        this.enabled = enabled;
    }

    public void setSalt(String salt) {
        this.salt = salt;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public void setLast_login(Date last_login) {
        this.last_login = last_login;
    }

    public void setConfirmation_token(String confirmation_token) {
        this.confirmation_token = confirmation_token;
    }

    public void setPassword_requested_at(Date password_requested_at) {
        this.password_requested_at = password_requested_at;
    }

    public void setRoles(String roles) {
        this.roles = roles;
    }

    public void setNom_prenom(String nom_prenom) {
        this.nom_prenom = nom_prenom;
    }

    public void setDate_naissance(Date date_naissance) {
        this.date_naissance = date_naissance;
    }

    public void setSexe(int sexe) {
        this.sexe = sexe;
    }

    public void setNumero_telephone(int numero_telephone) {
        this.numero_telephone = numero_telephone;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public void setUrl_photo_profil(String url_photo_profil) {
        this.url_photo_profil = url_photo_profil;
    }

    public void setDate_inscription(Date date_inscription) {
        this.date_inscription = date_inscription;
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
        final Utilisateur other = (Utilisateur) obj;
        if (this.id != other.id) {
            return false;
        }
        return true;
    }
    
    
}
