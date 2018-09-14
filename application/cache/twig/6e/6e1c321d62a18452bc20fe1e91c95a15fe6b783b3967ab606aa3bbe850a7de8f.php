<?php

/* personality/index.html */
class __TwigTemplate_2d42c6711cb7bbccb9354cee99ebae17e74e3816d19e968f9ff8e596df798b82 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
  <title>Live input record and playback</title>
  <style type='text/css'>
    body { font-family:HelveticaNeue;background-color:#fff;}
  </style>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
</head>
<body>

<h1>personality analytic</h1>

<form action=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "personality/analytic\" method=\"post\">
  <textarea name=\"text\"></textarea>
  <input type=\"submit\" value=\"analytic\">
</form>


<h2>Log</h2>
<pre id=\"log\"></pre>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "personality/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
  <title>Live input record and playback</title>
  <style type='text/css'>
    body { font-family:HelveticaNeue;background-color:#fff;}
  </style>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
</head>
<body>

<h1>personality analytic</h1>

<form action=\"{{base_url}}personality/analytic\" method=\"post\">
  <textarea name=\"text\"></textarea>
  <input type=\"submit\" value=\"analytic\">
</form>


<h2>Log</h2>
<pre id=\"log\"></pre>

</body>
</html>
", "personality/index.html", "/var/www/html/ci3/application/views/personality/index.html");
    }
}
