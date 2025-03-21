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

/* themes/custom/pivot/templates/paragraph/paragraph--paragraph_header_block.html.twig */
class __TwigTemplate_f5b6560c236e59a097f0040b9d19a900 extends Template
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
        $context["bg_img"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_paragraph_background_image", [], "any", false, false, true, 41)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_paragraph_background_image", [], "any", false, false, true, 41), "#items", [], "array", false, false, true, 41)), "entity", [], "any", false, false, true, 41), "uri", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41);
        // line 42
        if ( !(null === ($context["bg_img"] ?? null))) {
            // line 43
            yield "\t";
            $context["bg_img_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($context["bg_img"] ?? null));
        } else {
            // line 45
            yield "\t";
            $context["bg_img_url"] = "/";
        }
        // line 48
        $context["classes"] = ["paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 50))), Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["paragraph"] ?? null), "field_paragraph_extra_class", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51))), ((        // line 52
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 55
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
        // line 56
        yield "  <header";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 56), "html", null, true);
        yield ">
    ";
        // line 57
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 58
            yield "\t<div class=\"background-image-holder ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_paragraph_image_class", [], "any", false, false, true, 58), "value", [], "any", false, false, true, 58))), "html", null, true);
            yield "\">
       <img alt=\"background\" src=\"";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bg_img_url"] ?? null), "html", null, true);
            yield "\" />
    </div>
\t";
        }
        // line 62
        yield "    <div class=\"container ";
        if (Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_paragraph_align_vertical", [], "any", false, false, true, 62), "value", [], "any", false, false, true, 62)))) {
            yield " align-vertical ";
        }
        yield " \">
    ";
        // line 63
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 66
        yield "\t</div>
  </header>
";
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "\t
      ";
        // line 64
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
        return "themes/custom/pivot/templates/paragraph/paragraph--paragraph_header_block.html.twig";
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
        return array (  118 => 64,  109 => 63,  102 => 66,  100 => 63,  93 => 62,  87 => 59,  82 => 58,  80 => 57,  75 => 56,  63 => 55,  61 => 52,  60 => 51,  59 => 50,  58 => 48,  54 => 45,  50 => 43,  48 => 42,  46 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/pivot/templates/paragraph/paragraph--paragraph_header_block.html.twig", "D:\\Wamp\\www\\museo\\themes\\custom\\pivot\\templates\\paragraph\\paragraph--paragraph_header_block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41, "if" => 42, "block" => 55];
        static $filters = ["clean_class" => 50, "trim" => 51, "render" => 51, "escape" => 56, "without" => 64];
        static $functions = ["file_url" => 43];

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
