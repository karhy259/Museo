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

/* themes/custom/pivot/templates/layout/page--fullwidth.html.twig */
class __TwigTemplate_14f9b67c7157a8b730a8d5adf69a8139 extends Template
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
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "fluid_container", [], "any", false, false, true, 59)) ? ("container-fluid") : ("container"));
        // line 60
        yield "
  <a id=\"top\"></a>

\t
";
        // line 65
        yield "<div class=\"nav-container\">
  <nav class=\"top-bar ";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["mainmenu_class"] ?? null), "html", null, true);
        yield "\">
    <div class=\"container\">
      ";
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 68) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 68))) {
            // line 69
            yield "      <div class=\"row utility-menu\">
        <div class=\"col-sm-12\">
          <div class=\"utility-inner clearfix\">
            ";
            // line 72
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 72)) {
                // line 73
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 73), "html", null, true);
                yield "
            ";
            }
            // line 75
            yield "          
            ";
            // line 76
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 76)) {
                // line 77
                yield "              <div class=\"pull-right\">
                ";
                // line 78
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 78), "html", null, true);
                yield "
              </div>
            ";
            }
            // line 81
            yield "          </div>
        </div>
      </div>
      ";
        }
        // line 85
        yield "\t  
\t  
      ";
        // line 87
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 87) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 87)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 87))) {
            // line 88
            yield "        ";
            yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
            // line 104
            yield "      ";
        }
        // line 105
        yield "\t  
    </div>
  </nav>
</div>


";
        // line 112
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 158
        yield "

";
        // line 160
        if (((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 160) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 160)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 160)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 160)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 160))) {
            // line 161
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        }
        // line 187
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "mainmenu_class", "page", "action_links"]);        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        yield "          <div class=\"row nav-menu\">
            <div class=\"col-sm-3 col-md-3 columns\">
            ";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 91), "html", null, true);
        yield "
            </div>
        ";
        // line 93
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 93)) {
            // line 94
            yield "            <div class=\"col-sm-9 col-md-9 columns\">
              ";
            // line 95
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 95), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 98
        yield "        </div>
      
        <div class=\"mobile-toggle\">
          <i class=\"icon icon_menu\"></i>
        </div>
        ";
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 113
        yield "<div role=\"main\" id=\"main-container\" class=\"main-container js-quickedit-main-content\">
  
  ";
        // line 116
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 116)) {
            // line 117
            yield "  <header class=\"title\">
    ";
            // line 118
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 118)) {
                // line 119
                yield "      ";
                yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
                // line 122
                yield "    ";
            }
            // line 123
            yield "  </header>
  ";
        }
        // line 125
        yield "  ";
        // line 126
        yield "
  ";
        // line 128
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 128)) {
            // line 129
            yield "  <div class=\"title-wrapper\">
    ";
            // line 130
            yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
            // line 132
            yield "\t 
  </div>
  ";
        }
        // line 135
        yield "  ";
        // line 136
        yield "\t\t
  ";
        // line 138
        yield "  ";
        if (($context["action_links"] ?? null)) {
            // line 139
            yield "    ";
            yield from $this->unwrap()->yieldBlock('action_links', $context, $blocks);
            // line 142
            yield "  ";
        }
        // line 143
        yield "
  ";
        // line 145
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 145)) {
            // line 146
            yield "    ";
            yield from $this->unwrap()->yieldBlock('help', $context, $blocks);
            // line 149
            yield "  ";
        }
        // line 150
        yield "
  ";
        // line 152
        yield "  <div class=\"region region-content\">
    ";
        // line 153
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 153), "html", null, true);
        yield "
  </div>

</div>
";
        yield from [];
    }

    // line 119
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 120
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 120), "html", null, true);
        yield "
      ";
        yield from [];
    }

    // line 130
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 131
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 131), "html", null, true);
        yield "
    ";
        yield from [];
    }

    // line 139
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_action_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 140
        yield "      <ul class=\"action-links\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true);
        yield "</ul>
    ";
        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 147
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 147), "html", null, true);
        yield "
    ";
        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 162
        yield "<div class=\"footer-container\" role=\"contentinfo\">
\t<!-- postscript -->
\t";
        // line 164
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 164) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 164)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 164)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 164))) {
            // line 165
            yield "    <div id=\"postscript\" class=\"postscript row\">
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_first\">
        ";
            // line 167
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 167), "html", null, true);
            yield "
      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_second\">
        ";
            // line 170
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 170), "html", null, true);
            yield "
      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_third\">
        ";
            // line 173
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 173), "html", null, true);
            yield "
      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_fouth\">
        ";
            // line 176
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 176), "html", null, true);
            yield "
      </div>
    </div>
    ";
        }
        // line 180
        yield "\t
    ";
        // line 181
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 181)) {
            // line 182
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 182), "html", null, true);
            yield "
    ";
        }
        // line 184
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/pivot/templates/layout/page--fullwidth.html.twig";
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
        return array (  379 => 184,  373 => 182,  371 => 181,  368 => 180,  361 => 176,  355 => 173,  349 => 170,  343 => 167,  339 => 165,  337 => 164,  333 => 162,  326 => 161,  318 => 147,  311 => 146,  303 => 140,  296 => 139,  288 => 131,  281 => 130,  273 => 120,  266 => 119,  256 => 153,  253 => 152,  250 => 150,  247 => 149,  244 => 146,  241 => 145,  238 => 143,  235 => 142,  232 => 139,  229 => 138,  226 => 136,  224 => 135,  219 => 132,  217 => 130,  214 => 129,  211 => 128,  208 => 126,  206 => 125,  202 => 123,  199 => 122,  196 => 119,  194 => 118,  191 => 117,  188 => 116,  184 => 113,  177 => 112,  167 => 98,  161 => 95,  158 => 94,  156 => 93,  151 => 91,  147 => 89,  140 => 88,  133 => 187,  130 => 161,  128 => 160,  124 => 158,  122 => 112,  114 => 105,  111 => 104,  108 => 88,  106 => 87,  102 => 85,  96 => 81,  90 => 78,  87 => 77,  85 => 76,  82 => 75,  76 => 73,  74 => 72,  69 => 69,  67 => 68,  62 => 66,  59 => 65,  53 => 60,  51 => 59,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/pivot/templates/layout/page--fullwidth.html.twig", "D:\\Wamp\\www\\museo\\themes\\custom\\pivot\\templates\\layout\\page--fullwidth.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 59, "if" => 68, "block" => 88];
        static $filters = ["escape" => 66];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape'],
                [],
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
