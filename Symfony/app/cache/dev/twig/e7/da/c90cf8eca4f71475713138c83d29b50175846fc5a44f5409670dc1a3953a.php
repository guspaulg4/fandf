<?php

/* FfDemoBundle:Default:verificacionRematricula.html.twig */
class __TwigTemplate_e7dac90cf8eca4f71475713138c83d29b50175846fc5a44f5409670dc1a3953a extends Twig_Template
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
        echo "
<html>
<head>

<title>Fight and Fitness</title>

<Link  href = \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/detalle_alumno.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\"  />


</head>

<body>




  <div id=\"footer_arriba\">
  \t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/logo3.png"), "html", null, true);
        echo "\" />
  </div>

  
  
  <div id=\"cuadro_cont\">

  \t\t<div id=\"cuadro1\">
  \t\t\t
  \t\t
  \t\t</div>
    
\t    <div id=\"cuadro2\">

\t    \t\t<div class=\"nombre\">
\t\t    \t<p>Se Matriculo con exito nuevamente al alumno:</p>
\t\t    \t</div>

\t\t    \t<div class=\"datos\">
\t\t    \t\tAlumno : ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["apellidop"]) ? $context["apellidop"] : $this->getContext($context, "apellidop")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["apellidom"]) ? $context["apellidom"] : $this->getContext($context, "apellidom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo " <br><br>
\t\t    \t</div>\t

\t\t    \t<div class=\"boton\">
                \t<a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("ff_demo_homepage", array("slug" => ""));
        echo "\">
                  \t\tVolver Principal
                \t</a>
            \t</div>  

\t\t    \t
\t\t\t
\t\t</div>
\t</div>
  

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:verificacionRematricula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 41,  63 => 37,  41 => 18,  27 => 7,  19 => 1,);
    }
}
