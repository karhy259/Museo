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

/* themes/custom/pivot/templates/paragraph/paragraph--paragraph_image_bg_block.html.twig */
class __TwigTemplate_928d4ca0b8cba784e086fc786d386bac extends Template
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
        yield "
";
        // line 42
        $context["bg_img"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_paragraph_background_image", [], "any", false, false, true, 42)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_paragraph_background_image", [], "any", false, false, true, 42), "#items", [], "array", false, false, true, 42)), "entity", [], "any", false, false, true, 42), "uri", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42);
        // line 43
        if ( !(null === ($context["bg_img"] ?? null))) {
            // line 44
            yield "\t";
            $context["bg_img_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($context["bg_img"] ?? null));
        } else {
            // line 46
            yield "\t";
            $context["bg_img_url"] = "/";
        }
        // line 49
        $context["classes"] = ["paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 51))), Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 52
($context["paragraph"] ?? null), "field_paragraph_extra_class", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52))), ((        // line 53
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), "section-image-background"];
        // line 57
        yield "
";
        // line 58
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "paragraph", "view_mode", "attributes"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "  <section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 59), "html", null, true);
        yield ">
    ";
        // line 60
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 61
            yield "\t<div class=\"background-image-holder ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_paragraph_image_class", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61))), "html", null, true);
            yield "\">
       <img alt=\"background\" src=\"";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bg_img_url"] ?? null), "html", null, true);
            yield "\" />
    </div>
\t";
        }
        // line 65
        yield "    <div class=\"container ";
        if (Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_paragraph_align_vertical", [], "any", false, false, true, 65), "value", [], "any", false, false, true, 65)))) {
            yield " align-vertical ";
        }
        yield " \">
    ";
        // line 66
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 69
        yield "\t</div>
  </section>
";
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "\t
      ";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_paragraph_extra_class", "field_paragraph_background_image", "field_paragraph_align_vertical", "field_paragraph_image_class"), "html", null, true);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/pivot/templates/paragraph/paragraph--paragraph_image_bg_block.html.twig";
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
        return array (  124 => 67,  115 => 66,  108 => 69,  106 => 66,  99 => 65,  93 => 62,  88 => 61,  86 => 60,  81 => 59,  69 => 58,  66 => 57,  64 => 53,  63 => 52,  62 => 51,  61 => 49,  57 => 46,  53 => 44,  51 => 43,  49 => 42,  46 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/pivot/templates/paragraph/paragraph--paragraph_image_bg_block.html.twig", "D:\\Wamp\\www\\museo\\themes\\custom\\pivot\\templates\\paragraph\\paragraph--paragraph_image_bg_block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 42, "if" => 43, "block" => 58];
        static $filters = ["clean_class" => 51, "trim" => 52, "render" => 52, "escape" => 59, "without" => 67];
        static $functions = ["file_url" => 44];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'trim', 'render', 'escape', 'without'],
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
