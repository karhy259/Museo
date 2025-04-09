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

/* themes/custom/pivot/templates/paragraph/paragraph--paragraph_side_image_block.html.twig */
class __TwigTemplate_b6167e99440d0e81921465ef299905f6 extends Template
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
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_paragraph_image_position", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41)), ["
" => "", " " => ""])) == "right")) {
            yield " 
";
            // line 42
            $context["image_position"] = "right";
        } else {
            // line 44
            $context["image_position"] = "left";
        }
        // line 46
        yield "
";
        // line 48
        $context["classes"] = ["paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 50), 50, $this->source))), Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["paragraph"] ?? null), "field_paragraph_extra_class", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51), 51, $this->source))), "side-image", ((        // line 53
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 53, $this->source)))) : (""))];
        // line 56
        $context["img_value"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_paragraph_image", [], "any", false, false, true, 56)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "entity", [], "any", false, false, true, 56), "uri", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56);
        // line 57
        if ( !(null === ($context["img_value"] ?? null))) {
            // line 58
            yield "\t";
            $context["img_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["img_value"] ?? null), 58, $this->source));
        } else {
            // line 60
            yield "\t";
            $context["img_url"] = "/";
        }
        // line 62
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "content", "attributes"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "  <section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 63), 63, $this->source), "html", null, true);
        yield " >
\t";
        // line 64
        if ((($context["image_position"] ?? null) == "left")) {
            // line 65
            yield "\t<div class=\"image-container col-md-5 col-sm-4 pull-left\">
\t  <div class=\"background-image-holder\">
\t\t<img alt=\"background\" src=\"";
            // line 67
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img_url"] ?? null), 67, $this->source), "html", null, true);
            yield "\" />
\t  </div>
\t</div>
    <div class=\"container\">
\t  <div clas=\"row\">
\t    <div class=\"col-md-6 offset-md-6 col-sm-7 offset-sm-5 content clearfix\">
          ";
            // line 73
            yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
            // line 76
            yield "\t    </div>
\t  </div>
\t</div>
\t";
        }
        // line 80
        yield "\t
\t
\t";
        // line 82
        if ((($context["image_position"] ?? null) == "right")) {
            // line 83
            yield "\t<div class=\"image-container col-md-5 col-sm-3 pull-right\">
\t  <div class=\"background-image-holder\">
\t\t<img class=\"background-image\" alt=\"Background Image\" src=\"";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img_url"] ?? null), 85, $this->source), "html", null, true);
            yield "\">
\t  </div>
\t</div>
    <div class=\"container\">
\t  <div clas=\"row\">
\t    <div class=\"col-md-6 content col-sm-8 clearfix\">
            ";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 91, $this->source), "field_paragraph_extra_class", "field_paragraph_image", "field_paragraph_image_position"), "html", null, true);
            yield "
\t    </div>
\t  </div>
\t</div>
\t";
        }
        // line 96
        yield "  </section>
";
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "\t
            ";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 74, $this->source), "field_paragraph_extra_class", "field_paragraph_image", "field_paragraph_image_position"), "html", null, true);
        yield "
          ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/pivot/templates/paragraph/paragraph--paragraph_side_image_block.html.twig";
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
        return array (  159 => 74,  150 => 73,  144 => 96,  136 => 91,  127 => 85,  123 => 83,  121 => 82,  117 => 80,  111 => 76,  109 => 73,  100 => 67,  96 => 65,  94 => 64,  89 => 63,  77 => 62,  73 => 60,  69 => 58,  67 => 57,  65 => 56,  63 => 53,  62 => 51,  61 => 50,  60 => 48,  57 => 46,  54 => 44,  51 => 42,  46 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/pivot/templates/paragraph/paragraph--paragraph_side_image_block.html.twig", "D:\\Wamp\\www\\museo\\themes\\custom\\pivot\\templates\\paragraph\\paragraph--paragraph_side_image_block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 41, "set" => 42, "block" => 62);
        static $filters = array("lower" => 41, "replace" => 41, "striptags" => 41, "clean_class" => 50, "trim" => 51, "render" => 51, "escape" => 63, "without" => 91);
        static $functions = array("file_url" => 58);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['lower', 'replace', 'striptags', 'clean_class', 'trim', 'render', 'escape', 'without'],
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
