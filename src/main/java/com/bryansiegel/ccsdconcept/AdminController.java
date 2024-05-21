package com.bryansiegel.ccsdconcept;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class AdminController {

@GetMapping("/login")
    String login() {
    return "admin/login";
}

@GetMapping("/dashboard")
    String dashboard() {
    return "admin/dashboard";
}
}
