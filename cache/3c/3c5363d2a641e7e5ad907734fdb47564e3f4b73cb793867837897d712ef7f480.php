<?php

/* hello.html.twig */
class __TwigTemplate_5fab768c8c0cefc096c14e3725c4892e16e6f51569f5a3e4261c7537c35677a4 extends Twig_Template
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
        Hello ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " !
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  19 => 2,);
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
/*         Hello {{ name }} !*/
/*     </body>*/
/* </html>*/
/* */
