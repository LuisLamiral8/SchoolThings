/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.trabajoIntegrador01.controller;

import java.util.ArrayList;
import java.util.List;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;

/**
 *
 * @author info7
 */
@Controller

public class MainController {

    List<Persona> lstPersonas = new ArrayList<>();

    public MainController() {
        lstPersonas.add(new Persona("Bill", "Gates"));
        lstPersonas.add(new Persona("Steve", "Jobs"));
    }

    @GetMapping("/")
    public String index(Model model) {
        String msg = "helloworld";
        model.addAttribute("mensaje", msg);
        return "index";
    }

    @GetMapping("/listPersonas")
    public String listadoPersonas(Model model) {
        model.addAttribute("lstPersonas", lstPersonas);
        return "listPersona";
    }

    @GetMapping( "/addPersona")
    public String showAddPersonPage(Model model) {
        Persona p = new Persona();
        model.addAttribute("persona", p);
        return "addPersona";
    }
    @PostMapping("/savePersona")
    public String savePersona(@ModelAttribute("persona") Persona persona){
        lstPersonas.add(persona);
        return "redirect:/listPersonas";
    }
}
