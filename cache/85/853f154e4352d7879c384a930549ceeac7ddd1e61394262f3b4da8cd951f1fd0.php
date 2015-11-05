<?php

/* login.html.twig */
class __TwigTemplate_a79491badda555520b62872528d410e57237c396df232cc3fe8ec3a4117e474e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title></title>
    </head>
    <body>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 15
            echo "            <p>Error: ";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo " </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        <form method=\"post\">
            Username: <input name=\"username\" type=\"text\"><br>
            Password: <input name=\"password\" type=\"password\"><br>
            <input type=\"submit\" value=\"Login\">
        </form>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  37 => 15,  33 => 14,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <!DOCTYPE html>*/
/* <!--*/
/* To change this license header, choose License Headers in Project Properties.*/
/* To change this template file, choose Tools | Templates*/
/* and open the template in the editor.*/
/* -->*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title></title>*/
/*     </head>*/
/*     <body>*/
/*         {% for error in errorList %}*/
/*             <p>Error: {{ error }} </p>*/
/*         {% endfor %}*/
/*         <form method="post">*/
/*             Username: <input name="username" type="text"><br>*/
/*             Password: <input name="password" type="password"><br>*/
/*             <input type="submit" value="Login">*/
/*         </form>*/
/*     </body>*/
/* </html>*/
/* */
