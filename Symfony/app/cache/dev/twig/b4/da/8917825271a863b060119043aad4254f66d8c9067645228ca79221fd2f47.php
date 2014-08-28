<?php

/* FfDemoBundle:Default:alumno.html.twig */
class __TwigTemplate_b4da8917825271a863b060119043aad4254f66d8c9067645228ca79221fd2f47 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/detalle_alumno.css"), "html", null, true);
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
                <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("ff_demo_homepage", array("slug" => ""));
        echo "\">
                  Volver Principal
                </a>
            </div>

  \t\t</div>
    
\t    <div id=\"cuadro2\">

\t    \t\t<div>
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

\t    \t\t<a title=\"MATRICULAR\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rematricula", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">\t
\t    \t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/boton_1.png"), "html", null, true);
        echo "\"/>
\t    \t\t</a>

\t    \t\t
\t    \t\t<a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alumno2", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">\t
\t    \t\t\t<img title=\"ASISTENCIA\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/boton_3.png"), "html", null, true);
        echo "\" />
\t    \t\t</a>\t

\t    \t\t<a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">\t
\t    \t\t\t<img title=\"EDITAR ALUMNO\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/boton_5.png"), "html", null, true);
        echo "\" />
\t    \t\t</a>

\t    \t\t<div class=\"nombre\">
\t    \t\t
\t\t    \t\t<p>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidop"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre"), "html", null, true);
        echo "
\t\t    \t\t
\t\t    \t\t";
        // line 72
        if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal")) > twig_date_converter($this->env))) {
            // line 73
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 74
            if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal")) < twig_date_converter($this->env, "+14days"))) {
                // line 75
                echo "
\t\t\t\t\t\t\t\t<div id=\"rojo\"></div> 

\t\t\t\t\t\t\t";
            } else {
                // line 78
                echo "\t

\t\t\t\t\t\t\t\t<div id=\"verde\"> </div> 

\t\t\t\t\t\t\t";
            }
            // line 83
            echo "
\t\t\t\t\t\t";
        }
        // line 85
        echo "
\t\t\t\t\t\t";
        // line 86
        if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal")) < twig_date_converter($this->env))) {
            // line 87
            echo "\t\t\t\t\t\t\t<div id=\"negro\"> </div> 
\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 90
        echo "
\t\t\t\t\t</p>

\t\t\t\t<br>
\t\t    \t</div>

\t\t    \t<hr>

\t\t    \t<div>
\t\t    \t\t<div id=\"casistencia\">
\t\t    \t\t\t<div  class=\"datos\">
\t\t    \t\t\t\tAsistencias a la fecha
\t\t    \t\t\t</div>
\t\t    \t\t\t<div class=\"asistencia\">
\t\t    \t\t\t\t";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "vecesasistencia"), "html", null, true);
        echo "
\t\t    \t\t\t</div>

\t\t    \t\t</div> 

\t\t    \t\t<div id=\"casistencia2\">
\t\t    \t\t\t<div class=\"datos\">
\t\t    \t\t\t\tde un total de:
\t\t    \t\t\t</div>
\t\t    \t\t\t<div class=\"asistencia\">
\t\t    \t\t\t\t";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "vecestotales"), "html", null, true);
        echo "
\t\t    \t\t\t</div>

\t\t    \t\t</div> 

\t\t    \t</div>

\t\t    \t<div class=\"datos\">
\t\t\t    \t<p>
\t\t\t    \t\tDNI: ";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "dni"), "html", null, true);
        echo " <br>
\t\t\t    \t\tTélefono Fijo: ";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "telefonof"), "html", null, true);
        echo " <br>
\t\t\t    \t\tTélefono Celular: ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "telefonoc"), "html", null, true);
        echo " <br>
\t\t\t    \t</p> 
\t\t    \t</div><hr>

\t\t    \t<div class=\"datos3\">

\t\t    \t\t<table align=\"center\">
\t\t    \t\t\t<div class=\"nombre\"> Historial del Alumno</div> <br>
\t\t    \t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"fila1\"> Fecha inicio</td>
\t\t\t\t\t\t\t<td class=\"fila1\"> Fecha Final</td>
\t\t\t\t\t\t\t<td class=\"fila1\"> Disciplina</td>
\t\t\t\t\t\t\t<td class=\"fila2\"> Precio</td>
\t\t\t\t\t\t\t<td class=\"fila1\"> T.Pago </td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 142
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 143
            echo "
\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t<td class=\"datos\"> ";
            // line 146
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechainicio"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"datos\"> ";
            // line 147
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t";
            // line 148
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "1")) {
                // line 149
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">Muaythai</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 151
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "2")) {
                // line 152
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">Jiu Jitsu</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 154
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "3")) {
                // line 155
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">Judo</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 157
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "4")) {
                // line 158
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">MMA</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 160
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "5")) {
                // line 161
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">Box</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 163
            echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "precio"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t";
            // line 164
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "tipodepago") == "1")) {
                // line 165
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">Efectivo</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 167
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "tipodepago") == "2")) {
                // line 168
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">Tarjeta</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 170
            echo "
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "
\t\t\t\t\t\t

\t\t    \t\t</table>


\t\t    \t</div>\t
\t\t\t
\t\t</div>
\t</div>
  

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 173,  298 => 170,  294 => 168,  291 => 167,  287 => 165,  285 => 164,  280 => 163,  276 => 161,  273 => 160,  269 => 158,  266 => 157,  262 => 155,  259 => 154,  255 => 152,  252 => 151,  248 => 149,  246 => 148,  242 => 147,  238 => 146,  233 => 143,  229 => 142,  209 => 125,  205 => 124,  201 => 123,  189 => 114,  176 => 104,  160 => 90,  155 => 87,  153 => 86,  150 => 85,  146 => 83,  139 => 78,  133 => 75,  131 => 74,  128 => 73,  126 => 72,  117 => 70,  109 => 65,  105 => 64,  99 => 61,  95 => 60,  88 => 56,  84 => 55,  56 => 30,  43 => 20,  29 => 9,  19 => 1,);
    }
}
