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
        // line 2
        echo "


<html>
<head>

<title>Fight and Fitness</title>

<Link  href = \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\"  />


</head>

<body>


<div id=\"contenedor\">

  <div id=\"footer_arriba\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/ff1.jpg"), "html", null, true);
        echo "\" width=\"850\" height=\"238\" /></div>
  
  <div id=\"cuadro_cont\">

  \t\t<div id=\"cuadro1\"></div>
    
\t    <div id=\"cuadro2\">
\t    \t<div>
\t       \t\t<div id=\"texto\">Pago al día</div> 
\t       \t  \t<div id=\"verde\"></div> 
\t   \t  \t</div>
\t      \t
\t        <div>
\t       \t\t<div id=\"texto\">Pago por vencer</div>
\t          \t<div id=\"rojo\"></div> 
\t      \t</div>
\t      
\t      \t<div>
\t       \t  \t<div id=\"texto\">Pago Vencido</div>
\t       \t\t<div id=\"negro\"></div> 
\t      \t</div>\t
\t        <p>

\t      \t<table align=\"center\">

\t\t\t\t<tr>
\t\t\t\t\t<td> Nombre </td>
\t\t\t\t\t<td> dni </td>
\t\t\t\t\t<td> Telefono </td>
\t\t\t\t</tr>

\t\t\t\t";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 52
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "nombre"), "html", null, true);
            echo " </td>
\t\t\t\t\t
\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "dni"), "html", null, true);
            echo " </td>
\t\t\t\t
\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "telefono"), "html", null, true);
            echo " </td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t</table>

\t\t\t<a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("Formulario", array("slug" => ""));
        echo "\">
\t\t\t  Ingresar Alumno.
\t\t\t</a>
\t\t</div>
\t</div>
  
</div>



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
        return array (  83 => 53,  76 => 51,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 60,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  87 => 25,  55 => 15,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  56 => 9,  50 => 10,  29 => 10,  21 => 2,  41 => 9,  28 => 3,  43 => 6,  38 => 6,  26 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 3,  35 => 5,  31 => 5,  25 => 4,  19 => 2,  98 => 31,  93 => 57,  88 => 55,  78 => 21,  46 => 7,  44 => 12,  40 => 7,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 62,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 52,  73 => 19,  64 => 14,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 8,  42 => 20,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
