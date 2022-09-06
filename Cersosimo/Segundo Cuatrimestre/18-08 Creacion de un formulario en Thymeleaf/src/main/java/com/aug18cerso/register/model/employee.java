/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.aug18cerso.register.model;

/**
 *
 * @author Info7
 */
public class employee {

    public String name;
    public String address;
    public String married;
    private boolean permanent;

    public employee() {
    }

    public employee(String name, String address, String married, boolean permanent) {
        this.name = name;
        this.address = address;
        this.married = married;
        this.permanent = permanent;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public String getMarried() {
        return married;
    }

    public void setMarried(String married) {
        this.married = married;
    }

    public boolean isPermanent() {
        return permanent;
    }

    public void setPermanent(boolean permanent) {
        this.permanent = permanent;
    }

}
