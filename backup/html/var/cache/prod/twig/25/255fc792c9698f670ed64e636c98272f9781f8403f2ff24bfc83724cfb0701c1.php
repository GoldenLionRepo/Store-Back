<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig */
class __TwigTemplate_f45e187386c0f55c3f206c078912a21ea954b6ec612c8bbe30c7f1d1a1259223 extends Twig_Template
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
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig", 27);
        // line 28
        echo "
<div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">file_download</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download sample csv files", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block\">
        <div class=\"list-group\">
            ";
        // line 36
        echo $context["ps"]->getimport_file_sample("Sample Categories file", "categories_import");
        echo "
            ";
        // line 37
        echo $context["ps"]->getimport_file_sample("Sample Products file", "products_import");
        echo "
            ";
        // line 38
        echo $context["ps"]->getimport_file_sample("Sample Combinations file", "combinations_import");
        echo "
            ";
        // line 39
        echo $context["ps"]->getimport_file_sample("Sample Customers file", "customers_import");
        echo "
            ";
        // line 40
        echo $context["ps"]->getimport_file_sample("Sample Addresses file", "addresses_import");
        echo "
            ";
        // line 41
        echo $context["ps"]->getimport_file_sample("Sample Brands file", "manufacturers_import");
        echo "
            ";
        // line 42
        echo $context["ps"]->getimport_file_sample("Sample Suppliers file", "suppliers_import");
        echo "
            ";
        // line 43
        echo $context["ps"]->getimport_file_sample("Sample Aliases file", "alias_import");
        echo "
            ";
        // line 44
        echo $context["ps"]->getimport_file_sample("Sample Store Contacts file", "store_contacts");
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 44,  65 => 43,  61 => 42,  57 => 41,  53 => 40,  49 => 39,  45 => 38,  41 => 37,  37 => 36,  29 => 31,  24 => 28,  22 => 27,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig");
    }
}
