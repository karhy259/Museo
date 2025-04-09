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

/* themes/custom/pivot/templates/navigation/menu--main.html.twig */
class __TwigTemplate_841cbbafd4ce20e00e2ca011177473f1 extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 19
        yield "
";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 24, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 26
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 27
            yield "  ";
            $macros["menus"] = $this;
            // line 28
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 29
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 30
                    yield "      <ul class=\"menu\">
    ";
                } else {
                    // line 32
                    yield "      <ul class=\"subnav\">
    ";
                }
                // line 34
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    yield "      ";
                    // line 36
                    $context["item_classes"] = [((CoreExtension::getAttribute($this->env, $this->source,                     // line 37
$context["item"], "is_expanded", [], "any", false, false, true, 37)) ? ("expanded ") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 38
$context["item"], "is_expanded", [], "any", false, false, true, 38)) ? ("dropdown") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 39
$context["item"], "is_expanded", [], "any", false, false, true, 39)) ? ("has-dropdown") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 40
$context["item"], "in_active_trail", [], "any", false, false, true, 40)) ? ("active") : (""))];
                    // line 43
                    yield "      ";
                    if (((($context["menu_level"] ?? null) == 0) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 43))) {
                        // line 44
                        yield "        <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 44), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
                        yield ">
        
\t\t";
                        // line 46
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 46), 46, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 46), 46, $this->source), ["class" => ["dropdown__trigger"], "data-target" => ["#"], "data-toggle" => ["dropdown"]]), "html", null, true);
                        yield "
      ";
                    } else {
                        // line 48
                        yield "        <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 48), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                        yield ">
        ";
                        // line 49
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 49), 49, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 49), 49, $this->source), ["class" => ["dropdown__trigger"]]), "html", null, true);
                        yield "
      ";
                    }
                    // line 51
                    yield "      ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 51)) {
                        // line 52
                        yield "        ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 52), CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", ["nav", "navbar-nav"], "method", false, false, true, 52), (($context["menu_level"] ?? null) + 1)], 52, $context, $this->getSourceContext()));
                        yield "
      ";
                    }
                    // line 54
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                yield "      </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/pivot/templates/navigation/menu--main.html.twig";
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
        return array (  142 => 56,  135 => 54,  129 => 52,  126 => 51,  121 => 49,  116 => 48,  111 => 46,  105 => 44,  102 => 43,  100 => 40,  99 => 39,  98 => 38,  97 => 37,  96 => 36,  94 => 35,  89 => 34,  85 => 32,  81 => 30,  78 => 29,  75 => 28,  72 => 27,  58 => 26,  49 => 24,  46 => 19,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/pivot/templates/navigation/menu--main.html.twig", "D:\\Wamp\\www\\museo\\themes\\custom\\pivot\\templates\\navigation\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 18, "macro" => 26, "if" => 28, "for" => 34, "set" => 36);
        static $filters = array("escape" => 44);
        static $functions = array("link" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link'],
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
