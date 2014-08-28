<?php

/* FfDemoBundle:Default:Formulario.html.twig */
class __TwigTemplate_41e2f74a86faff61681e6ece80016a43c7c6488d617baf5fa92f7c5bf7594eb7 extends Twig_Template
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
        // line 1
        echo "<html>
<head>

<title>Fight and Fitness</title>

<Link  href = \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\"  />


<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/new.js"), "html", null, true);
        echo "\" ></script>
 




</head>

<body>

<div id=\"footer_arriba\">
    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/logo3.png"), "html", null, true);
        echo "\" />
</div>

 <div id=\"cuadro_cont\">

        <div id=\"cuadro1\">
            
            <div class=\"boton\">
                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ff_demo_homepage", array("slug" => ""));
        echo "\">
                  Volver Principal
                </a>
            </div>     
        </div>
    
        <div id=\"cuadro_2\">


    
            ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
             
                <div class=\"titulo_form\"> Ingresar los datos del nuevo Alumno</div>
                         
            ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>

        <br><br>
    </div>


    </div>

</body>


</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:Formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 43,  74 => 39,  70 => 38,  57 => 28,  46 => 20,  32 => 9,  26 => 6,  19 => 1,);
    }
}
