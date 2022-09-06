/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.aug18cerso.register.controller;

import com.aug18cerso.register.model.employee;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;

/**
 *
 * @author Info7
 */
@Controller
public class employeeController {

    @GetMapping("/")
    public String home(Model model) {
        model.addAttribute("employee", new employee());
        return "register";
    }
    
    @PostMapping("/register")
    public String registerEmployee(@ModelAttribute("employee") employee employee){
        return "confirmation";
    }
}
