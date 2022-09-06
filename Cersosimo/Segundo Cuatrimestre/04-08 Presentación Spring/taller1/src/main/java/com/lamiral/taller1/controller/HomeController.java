/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.lamiral.taller1.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

/**
 *
 * @author Info7
 */
@Controller
public class HomeController {

    @GetMapping("/")
    @ResponseBody
    public String home() {
        return "Bienvenidos a la programacion web con spring boot <hr>";
    }

    @GetMapping("/about")
    @ResponseBody
    public String about() {
        return "Buenas tardes <hr>";
    }

    @GetMapping("/parametros/{id}")
    @ResponseBody
    public String parametros(@PathVariable("id") Long id) {
        return "Parámetros: " + id + "<hr>";
    }
    
    @GetMapping("/query-string")
    @ResponseBody
    public String query_string(@RequestParam("id") Long id) {
        return "Parámetros: " + id + "<hr>";
    }
}
