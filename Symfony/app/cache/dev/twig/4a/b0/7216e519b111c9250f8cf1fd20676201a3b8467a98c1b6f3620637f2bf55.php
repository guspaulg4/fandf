<?php

/* FfDemoBundle:Default:rematricula.html.twig */
class __TwigTemplate_4ab07216e519b111c9250f8cf1fd20676201a3b8467a98c1b6f3620637f2bf55 extends Twig_Template
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
             
                <div class=\"titulo_form\"> Nueva Matricula del Alumno:

                <div class=\"nombre\">";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["apellidop"]) ? $context["apellidop"] : $this->getContext($context, "apellidop")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["apellidom"]) ? $context["apellidom"] : $this->getContext($context, "apellidom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "</div>

                </div>
                         
            ";
        // line 47
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
        return "FfDemoBundle:Default:rematricula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 47,  81 => 43,  74 => 39,  70 => 38,  57 => 28,  46 => 20,  32 => 9,  26 => 6,  19 => 1,);
    }
}