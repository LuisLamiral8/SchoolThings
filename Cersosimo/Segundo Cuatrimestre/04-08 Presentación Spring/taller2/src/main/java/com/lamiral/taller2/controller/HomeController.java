/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.lamiral.taller2.controller;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ResponseBody;

/**
 *
 * @author Info7
 */
@Controller
public class HomeController {

    @GetMapping("/")
    public String home(Model model) {
        String texto = "Holaaaaaaaaaa";
        model.addAttribute("texto", texto);
        return "home";
    }
    @GetMapping("/vista")
    public String vista(Model model) {
        Integer num1=10, num2=20;
        Double num=1025.45;
        Date fecha= new Date();
        List<String> colores = new ArrayList<String>();
        //Agregamos elementos a la lista
        colores.add("Rojo");
        colores.add("naranja");
        colores.add("amarillo");
        colores.add("verde");
        colores.add("azul");
        colores.add("indigo");
        colores.add("violeta");
        //Agregar las variables al modelo
        model.addAttribute("num1", num1);
        model.addAttribute("num2", num2);
        model.addAttribute("num", num);
        model.addAttribute("fecha", fecha);
        model.addAttribute("colores", colores);
        
        return "vista";
    }
}
