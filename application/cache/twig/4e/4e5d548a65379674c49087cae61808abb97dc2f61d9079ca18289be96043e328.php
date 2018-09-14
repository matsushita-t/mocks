<?php

/* home.html */
class __TwigTemplate_17b9e35e5468aab9264bcd17e00e508b595167d0e61206d199a2bcd5855e48ef extends Twig_Template
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
        echo "<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<title>Welcome to CodeIgniter</title>

\t<style type=\"text/css\">

\t::selection { background-color: #E13300; color: white; }
\t::-moz-selection { background-color: #E13300; color: white; }

\tbody {
\t\tbackground-color: #fff;
\t\tmargin: 40px;
\t\tfont: 13px/20px normal Helvetica, Arial, sans-serif;
\t\tcolor: #4F5155;
\t}

\ta {
\t\tcolor: #003399;
\t\tbackground-color: transparent;
\t\tfont-weight: normal;
\t}

\th1 {
\t\tcolor: #444;
\t\tbackground-color: transparent;
\t\tborder-bottom: 1px solid #D0D0D0;
\t\tfont-size: 19px;
\t\tfont-weight: normal;
\t\tmargin: 0 0 14px 0;
\t\tpadding: 14px 15px 10px 15px;
\t}

\tcode {
\t\tfont-family: Consolas, Monaco, Courier New, Courier, monospace;
\t\tfont-size: 12px;
\t\tbackground-color: #f9f9f9;
\t\tborder: 1px solid #D0D0D0;
\t\tcolor: #002166;
\t\tdisplay: block;
\t\tmargin: 14px 0 14px 0;
\t\tpadding: 12px 10px 12px 10px;
\t}

\t#body {
\t\tmargin: 0 15px 0 15px;
\t}

\tp.footer {
\t\ttext-align: right;
\t\tfont-size: 11px;
\t\tborder-top: 1px solid #D0D0D0;
\t\tline-height: 32px;
\t\tpadding: 0 10px 0 10px;
\t\tmargin: 20px 0 0 0;
\t}

\t#container {
\t\tmargin: 10px;
\t\tborder: 1px solid #D0D0D0;
\t\tbox-shadow: 0 0 8px #D0D0D0;
\t}
\t</style>
</head>
<body>

<div id=\"container\">
<p>";
        // line 71
        echo twig_escape_filter($this->env, ($context["test_value"] ?? null), "html", null, true);
        echo "</p>

</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 71,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<title>Welcome to CodeIgniter</title>

\t<style type=\"text/css\">

\t::selection { background-color: #E13300; color: white; }
\t::-moz-selection { background-color: #E13300; color: white; }

\tbody {
\t\tbackground-color: #fff;
\t\tmargin: 40px;
\t\tfont: 13px/20px normal Helvetica, Arial, sans-serif;
\t\tcolor: #4F5155;
\t}

\ta {
\t\tcolor: #003399;
\t\tbackground-color: transparent;
\t\tfont-weight: normal;
\t}

\th1 {
\t\tcolor: #444;
\t\tbackground-color: transparent;
\t\tborder-bottom: 1px solid #D0D0D0;
\t\tfont-size: 19px;
\t\tfont-weight: normal;
\t\tmargin: 0 0 14px 0;
\t\tpadding: 14px 15px 10px 15px;
\t}

\tcode {
\t\tfont-family: Consolas, Monaco, Courier New, Courier, monospace;
\t\tfont-size: 12px;
\t\tbackground-color: #f9f9f9;
\t\tborder: 1px solid #D0D0D0;
\t\tcolor: #002166;
\t\tdisplay: block;
\t\tmargin: 14px 0 14px 0;
\t\tpadding: 12px 10px 12px 10px;
\t}

\t#body {
\t\tmargin: 0 15px 0 15px;
\t}

\tp.footer {
\t\ttext-align: right;
\t\tfont-size: 11px;
\t\tborder-top: 1px solid #D0D0D0;
\t\tline-height: 32px;
\t\tpadding: 0 10px 0 10px;
\t\tmargin: 20px 0 0 0;
\t}

\t#container {
\t\tmargin: 10px;
\t\tborder: 1px solid #D0D0D0;
\t\tbox-shadow: 0 0 8px #D0D0D0;
\t}
\t</style>
</head>
<body>

<div id=\"container\">
<p>{{ test_value }}</p>

</div>

</body>
</html>", "home.html", "/var/www/html/ci3/application/views/home.html");
    }
}
