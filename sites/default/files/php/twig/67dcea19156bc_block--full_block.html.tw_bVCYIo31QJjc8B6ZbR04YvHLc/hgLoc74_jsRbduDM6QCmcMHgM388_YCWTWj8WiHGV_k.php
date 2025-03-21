<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/pivot/templates/block/block--full_block.html.twig */
class __TwigTemplate_7ad593b41736a37c6c4c06b8130f4804 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        $context["bg_img"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_block_background_image", [], "any", false, false, true, 48)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_block_background_image", [], "any", false, false, true, 48), "#items", [], "array", false, false, true, 48)), "entity", [], "any", false, false, true, 48), "uri", [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48);
        // line 49
        if ( !(null === ($context["bg_img"] ?? null))) {
            // line 50
            yield "\t";
            $context["bg_img_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($context["bg_img"] ?? null));
            // line 51
            yield "\t";
            $context["image_class"] = "imagebg";
        } else {
            // line 53
            yield "\t";
            $context["bg_img_url"] = "/";
            // line 54
            yield "\t";
            $context["image_class"] = "";
        }
        // line 57
        $context["classes"] = ["block", ("block-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 59
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 59))), ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 60
($context["plugin_id"] ?? null))), Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["content"] ?? null), "field_block_extra_class", [], "any", false, false, true, 61))), ["
" => ""])), "clearfix",         // line 63
($context["image_class"] ?? null)];
        // line 66
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 66), "html", null, true);
        yield "  id=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_block_id", [], "any", false, false, true, 66))), ["
" => "", " " => ""]), "html", null, true);
        yield "\">

  <div class=\"block-inner\">
    ";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
    ";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  </div>
  
  ";
        // line 73
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 74
            yield "\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"";
            // line 75
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bg_img_url"] ?? null), "html", null, true);
            yield "\" />
    </div>
  ";
        }
        // line 78
        yield "  ";
        if (Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_block_container", [], "any", false, false, true, 78))), ["
" => "", " " => ""])) {
            // line 79
            yield "    <div class=\"container ";
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_content_vertical_center", [], "any", false, false, true, 79))), ["
" => "", " " => ""])) == "on")) {
                yield " align-center ";
            }
            yield " \">
  ";
        }
        // line 81
        yield "    ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 84
        yield "\t
  ";
        // line 85
        if (Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_block_container", [], "any", false, false, true, 85))), ["
" => "", " " => ""])) {
            yield " </div> ";
        }
        // line 86
        yield "</div>






";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "configuration", "plugin_id", "attributes", "title_prefix", "title_suffix"]);        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_block_extra_class", "field_block_background_image", "field_block_align_vertical", "field_block_id", "field_block_container"), "html", null, true);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/pivot/templates/block/block--full_block.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  145 => 82,  138 => 81,  125 => 86,  120 => 85,  117 => 84,  114 => 81,  105 => 79,  101 => 78,  95 => 75,  92 => 74,  90 => 73,  84 => 70,  80 => 69,  70 => 66,  68 => 63,  66 => 61,  65 => 60,  64 => 59,  63 => 57,  59 => 54,  56 => 53,  52 => 51,  49 => 50,  47 => 49,  45 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/pivot/templates/block/block--full_block.html.twig", "D:\\Wamp\\www\\museo\\themes\\custom\\pivot\\templates\\block\\block--full_block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 48, "if" => 49, "block" => 81];
        static $filters = ["clean_class" => 59, "lower" => 61, "replace" => 61, "striptags" => 61, "render" => 61, "escape" => 66, "without" => 82];
        static $functions = ["file_url" => 50];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'lower', 'replace', 'striptags', 'render', 'escape', 'without'],
                ['file_url'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
