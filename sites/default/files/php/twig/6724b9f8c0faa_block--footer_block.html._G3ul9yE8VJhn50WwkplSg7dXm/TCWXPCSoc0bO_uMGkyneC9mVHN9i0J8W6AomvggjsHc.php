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

/* themes/custom/pivot/templates/block/block--footer_block.html.twig */
class __TwigTemplate_3087b11632bb5c96255f785199770aa9 extends Template
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
        yield "
";
        // line 49
        $context["bg_img"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_block_background_image", [], "any", false, false, true, 49)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "entity", [], "any", false, false, true, 49), "uri", [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49);
        // line 50
        if ( !(null === ($context["bg_img"] ?? null))) {
            // line 51
            yield "\t";
            $context["bg_img_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["bg_img"] ?? null), 51, $this->source));
            // line 52
            yield "\t";
            $context["image_class"] = "imagebg";
        } else {
            // line 54
            yield "\t";
            $context["bg_img_url"] = "/";
            // line 55
            yield "\t";
            $context["image_class"] = "";
        }
        // line 58
        $context["classes"] = ["block", ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 60
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 60), 60, $this->source))), ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 61
($context["plugin_id"] ?? null), 61, $this->source))), Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 62
($context["content"] ?? null), "field_block_extra_class", [], "any", false, false, true, 62), 62, $this->source))), ["
" => ""])), "clearfix",         // line 64
($context["image_class"] ?? null)];
        // line 67
        yield "<footer";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 67), 67, $this->source), "html", null, true);
        yield "  id=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_block_id", [], "any", false, false, true, 67), 67, $this->source))), ["
" => "", " " => ""]), "html", null, true);
        yield "\">

  <div class=\"block-inner\">
    ";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 70, $this->source), "html", null, true);
        yield "
    ";
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 71, $this->source), "html", null, true);
        yield "
  </div>
  
    ";
        // line 74
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 77
        yield "\t
</footer>






";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "configuration", "plugin_id", "attributes", "title_prefix", "title_suffix"]);        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 75, $this->source), "field_block_extra_class", "field_block_id", "field_block_container"), "html", null, true);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/pivot/templates/block/block--footer_block.html.twig";
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
        return array (  116 => 75,  109 => 74,  95 => 77,  93 => 74,  87 => 71,  83 => 70,  73 => 67,  71 => 64,  69 => 62,  68 => 61,  67 => 60,  66 => 58,  62 => 55,  59 => 54,  55 => 52,  52 => 51,  50 => 50,  48 => 49,  45 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/pivot/templates/block/block--footer_block.html.twig", "D:\\Wamp\\www\\museo\\themes\\custom\\pivot\\templates\\block\\block--footer_block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 50, "block" => 74);
        static $filters = array("clean_class" => 60, "lower" => 62, "replace" => 62, "striptags" => 62, "render" => 62, "escape" => 67, "without" => 75);
        static $functions = array("file_url" => 51);

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
