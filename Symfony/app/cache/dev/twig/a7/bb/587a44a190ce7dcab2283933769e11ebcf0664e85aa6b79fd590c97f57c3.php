<?php

/* FfDemoBundle:Default:index.html.twig */
class __TwigTemplate_a7bb587a44a190ce7dcab2283933769e11ebcf0664e85aa6b79fd590c97f57c3 extends Twig_Template
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
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\"  />


</head>

<body>




  <div id=\"footer_arriba\">
  \t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/logo3.png"), "html", null, true);
        echo "\" />
  </div>

  
  
  <div id=\"cuadro_cont\">

  \t\t<div id=\"cuadro1\">
  \t\t\t
  \t\t\t<div class=\"boton\">
\t  \t\t\t<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("Formulario", array("slug" => ""));
        echo "\">
\t\t\t\t  Matricula
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"boton\">
\t  \t\t\t<a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("Busqueda", array("slug" => ""));
        echo "\">
\t\t\t\t  busqueda
\t\t\t\t</a>
\t\t\t</div>\t

\t\t\t<div class=\"boton\">
\t  \t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("estadistica", array("slug" => ""));
        echo "\">
\t\t\t\t  Estadisticas
\t\t\t\t</a>
\t\t\t</div>\t

  \t\t</div>
    
\t    <div id=\"cuadro2\">





\t    \t<table align=\"center\">\t\t
\t\t       \t\t<div id=\"texto\">Los Cumpleañeros:</div> <br>
\t\t   \t  \t

\t\t\t\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["cumple"]) {
            // line 60
            echo "\t\t\t\t<tr>
\t\t\t\t\t


\t\t\t\t    ";
            // line 64
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "cumple"), "m") == twig_date_format_filter($this->env, "now", "m"))) {
                // line 65
                echo "\t\t\t\t    ";
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "cumple"), "d") == twig_date_format_filter($this->env, "now", "d"))) {
                    // line 66
                    echo "
\t\t\t\t\t\t<td class=\"fila_1\">";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "apellidop"), "html", null, true);
                    echo " </td>
\t\t\t\t\t
\t\t\t\t\t\t<td class=\"fila_1\">";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "apellidom"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t<td class=\"fila_2\">";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "nombre"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t<td class=\"fila_3\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "id"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                    echo "\" width=\"20\" height=\"20\"/> 
\t\t\t\t\t\t\t</a>\t
\t\t\t\t\t\t</td>

\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t";
            }
            // line 81
            echo "
\t\t\t\t</tr>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cumple'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t\t\t</table><br>












\t\t    \t<div>
\t\t       \t\t<div id=\"texto\">Pago al día</div> 
\t\t       \t  \t<div id=\"verde\"></div> 
\t\t   \t  \t</div>
\t\t      \t
\t\t        <div>
\t\t       \t\t<div id=\"texto\">Pago por vencer</div>
\t\t          \t<div id=\"rojo\"></div> 
\t\t      \t</div>
\t\t      
\t\t      \t<div>
\t\t       \t  \t<div id=\"texto\">Pago Vencido</div>
\t\t       \t\t<div id=\"negro\"></div> 
\t\t      \t</div>\t
\t\t        <br><br>

\t      \t<table align=\"center\">

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fila1\"> APELLIDOS</td>
\t\t\t\t\t<td class=\"fila1\"> APELLIDOS</td>
\t\t\t\t\t<td class=\"fila2\"> NOMBRES</td>
\t\t\t\t\t<td class=\"fila3\"> </td>
\t\t\t\t\t<td class=\"fila3\"> </td>
\t\t\t\t</tr>

\t\t\t\t";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 125
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fila_1\">";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidop"), "html", null, true);
            echo " </td>
\t\t\t\t
\t\t\t\t\t<td class=\"fila_1\">";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidom"), "html", null, true);
            echo " </td>

\t\t\t\t\t<td class=\"fila_2\">";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nombre"), "html", null, true);
            echo "</td>

\t\t\t\t\t
\t\t\t\t\t<td class=\"fila_3\">
\t\t\t\t\t\t<a href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
            echo "\" width=\"20\" height=\"20\"/> 
\t\t\t\t\t\t</a>\t
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t\t\t</table>

\t\t\t
\t\t</div>
\t</div>
  

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 141,  221 => 135,  217 => 134,  210 => 130,  205 => 128,  200 => 126,  197 => 125,  193 => 124,  152 => 85,  143 => 81,  140 => 80,  132 => 75,  128 => 74,  122 => 71,  117 => 69,  112 => 67,  109 => 66,  106 => 65,  104 => 64,  98 => 60,  94 => 59,  74 => 42,  65 => 36,  56 => 30,  43 => 20,  29 => 9,  19 => 1,);
    }
}
