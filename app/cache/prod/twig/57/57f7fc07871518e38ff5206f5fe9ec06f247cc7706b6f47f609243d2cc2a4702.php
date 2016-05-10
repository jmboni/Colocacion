<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_735ca9f6593a673945cde30bca4731e39a7113e720bdfb01b16496c5955a1c36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'list_footer' => array($this, 'block_list_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
            'sonata_list_filter_group_class' => array($this, 'block_sonata_list_filter_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : null), "SonataAdminBundle:CRUD:base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 15)->display($context);
    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
    }

    // line 20
    public function block_list_table($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 22
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "batchactions", array());
        // line 23
        echo "        ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)))) {
            // line 24
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
            echo "\">
        ";
        }
        // line 27
        echo "
        ";
        // line 29
        echo "        <div class=\"box box-primary\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
        echo "

                ";
        // line 33
        $this->displayBlock('list_header', $context, $blocks);
        // line 34
        echo "
                ";
        // line 35
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "results", array())) > 0)) {
            // line 36
            echo "                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        ";
            // line 37
            $this->displayBlock('table_header', $context, $blocks);
            // line 73
            echo "
                        ";
            // line 74
            $this->displayBlock('table_body', $context, $blocks);
            // line 79
            echo "
                        ";
            // line 80
            $this->displayBlock('table_footer', $context, $blocks);
            // line 82
            echo "                    </table>
                ";
        } else {
            // line 84
            echo "                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "</span>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" style=\"width: 0%\"></div>
                            </div>
                            <span class=\"progress-description\">
                                ";
            // line 92
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "xmlHttpRequest", array())) {
                // line 93
                echo "                                    ";
                $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 93)->display($context);
                // line 94
                echo "                                ";
            }
            // line 95
            echo "                            </span>
                        </div><!-- /.info-box-content -->
                    </div>
                ";
        }
        // line 99
        echo "
                ";
        // line 100
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
        echo "
            </div>
            ";
        // line 102
        $this->displayBlock('list_footer', $context, $blocks);
        // line 193
        echo "        </div>
        ";
        // line 194
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)))) {
            // line 195
            echo "            </form>
        ";
        }
        // line 197
        echo "    </div>
";
    }

    // line 33
    public function block_list_header($context, array $blocks = array())
    {
    }

    // line 37
    public function block_table_header($context, array $blocks = array())
    {
        // line 38
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 41
            echo "                                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 42
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 45
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 46
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 47
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array()))) {
                // line 48
                echo "                                            ";
                // line 49
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array()))) {
                // line 50
                echo "                                            ";
                // line 51
                echo "                                        ";
            } else {
                // line 52
                echo "                                            ";
                $context["sortable"] = false;
                // line 53
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 54
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 55
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array())), "method");
                    // line 56
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : null), "filter", array()), "_sort_by", array())));
                    // line 57
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 58
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 59
                    echo "                                            ";
                }
                // line 60
                echo "
                                            ";
                // line 61
                ob_start();
                // line 62
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : null), "html", null, true);
                }
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_class", array()), "html", null, true);
                }
                echo "\"";
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_style", array(), "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_style", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 63
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : null)), "method"), "html", null, true);
                    echo "\">";
                }
                // line 64
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "
                                                    ";
                // line 65
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "</a>";
                }
                // line 66
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 68
                echo "                                        ";
            }
            // line 69
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </tr>
                            </thead>
                        ";
    }

    // line 74
    public function block_table_body($context, array $blocks = array())
    {
        // line 75
        echo "                            <tbody>
                                ";
        // line 76
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getListMode", array(), "method"))), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 76)->display($context);
        // line 77
        echo "                            </tbody>
                        ";
    }

    // line 80
    public function block_table_footer($context, array $blocks = array())
    {
        // line 81
        echo "                        ";
    }

    // line 102
    public function block_list_footer($context, array $blocks = array())
    {
        // line 103
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "results", array())) > 0)) {
            // line 104
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 106
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array())) {
                // line 107
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 108
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                    // line 109
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 150
                    echo "                                    ";
                }
                // line 151
                echo "                                </div>


                                <div class=\"pull-right\">
                                    ";
                // line 155
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method")))) {
                    // line 156
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\"></i>
                                                ";
                    // line 159
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 163
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 164
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 165
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\"></i>
                                                        ";
                        // line 167
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                <li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 176
                echo "
                                    ";
                // line 177
                $this->displayBlock('pager_results', $context, $blocks);
                // line 180
                echo "                                </div>
                            ";
            }
            // line 182
            echo "                        </div>

                        ";
            // line 184
            $this->displayBlock('pager_links', $context, $blocks);
            // line 190
            echo "                    </div>
                ";
        }
        // line 192
        echo "            ";
    }

    // line 109
    public function block_batch($context, array $blocks = array())
    {
        // line 110
        echo "                                            <script>
                                                ";
        // line 111
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 132
        echo "                                            </script>

                                        ";
        // line 134
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 147
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
    }

    // line 111
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 112
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        \$('#list_batch_checkbox').on('ifChanged', function () {
                                                            \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                .iCheck(\$(this).is(':checked') ? 'check' : 'uncheck')
                                                            ;
                                                        });

                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
    }

    // line 134
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 135
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : null));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 143
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["options"], "label", array()), array(), (($this->getAttribute($context["options"], "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["options"], "translation_domain", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", array())))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                                            </select>
                                        ";
    }

    // line 177
    public function block_pager_results($context, array $blocks = array())
    {
        // line 178
        echo "                                        ";
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 178)->display($context);
        // line 179
        echo "                                    ";
    }

    // line 184
    public function block_pager_links($context, array $blocks = array())
    {
        // line 185
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 186
            echo "                                <hr/>
                                ";
            // line 187
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_links"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 187)->display($context);
            // line 188
            echo "                            ";
        }
        // line 189
        echo "                        ";
    }

    // line 200
    public function block_list_filters_actions($context, array $blocks = array())
    {
        // line 201
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "filters", array()))) {
            // line 202
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\"></i>
                    ";
            // line 207
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 212
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 213
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 214
                    echo ((($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                </ul>
            </li>
        </ul>
    ";
        }
    }

    // line 224
    public function block_list_filters($context, array $blocks = array())
    {
        // line 225
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "filters", array())) {
            // line 226
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "filter"), "method")));
            // line 227
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 228
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 231
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 232
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 236
            $context["withAdvancedFilter"] = false;
            // line 237
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "filters", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 238
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if ((($this->getAttribute($context["filter"], "isActive", array(), "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 239
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 240
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 242
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 243
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 245
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : null)));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 249
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 254
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 261
                if ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "advanced_filter", array(), "array")) {
                    // line 262
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 263
                    echo "                                    ";
                }
                // line 264
                echo "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 269
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 270
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\"></i> ";
            // line 274
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 278
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 282
            if ((isset($context["withAdvancedFilter"]) ? $context["withAdvancedFilter"] : null)) {
                // line 283
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\"></i>
                                            ";
                // line 286
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 290
            echo "                            </div>
                        </div>

                        ";
            // line 293
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 294
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 238
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 238,  797 => 296,  786 => 294,  782 => 293,  777 => 290,  770 => 286,  765 => 283,  763 => 282,  756 => 278,  752 => 277,  746 => 274,  738 => 270,  736 => 269,  730 => 265,  716 => 264,  713 => 263,  710 => 262,  708 => 261,  694 => 254,  686 => 249,  679 => 245,  675 => 243,  672 => 242,  664 => 240,  662 => 239,  645 => 238,  627 => 237,  625 => 236,  618 => 232,  612 => 231,  604 => 228,  601 => 227,  598 => 226,  595 => 225,  592 => 224,  584 => 218,  571 => 214,  563 => 213,  560 => 212,  555 => 211,  548 => 207,  541 => 202,  539 => 201,  536 => 200,  532 => 189,  529 => 188,  527 => 187,  524 => 186,  521 => 185,  518 => 184,  514 => 179,  511 => 178,  508 => 177,  503 => 145,  492 => 143,  488 => 142,  481 => 138,  477 => 137,  473 => 136,  468 => 135,  465 => 134,  442 => 112,  439 => 111,  433 => 148,  430 => 147,  428 => 134,  424 => 132,  422 => 111,  419 => 110,  416 => 109,  412 => 192,  408 => 190,  406 => 184,  402 => 182,  398 => 180,  396 => 177,  393 => 176,  386 => 171,  376 => 167,  371 => 165,  368 => 164,  364 => 163,  357 => 159,  352 => 156,  350 => 155,  344 => 151,  341 => 150,  338 => 109,  336 => 108,  333 => 107,  331 => 106,  327 => 104,  324 => 103,  321 => 102,  317 => 81,  314 => 80,  309 => 77,  307 => 76,  304 => 75,  301 => 74,  295 => 70,  289 => 69,  286 => 68,  282 => 66,  278 => 65,  273 => 64,  267 => 63,  245 => 62,  243 => 61,  240 => 60,  237 => 59,  234 => 58,  231 => 57,  228 => 56,  225 => 55,  222 => 54,  219 => 53,  216 => 52,  213 => 51,  211 => 50,  208 => 49,  206 => 48,  204 => 47,  201 => 46,  199 => 45,  194 => 42,  191 => 41,  187 => 40,  183 => 38,  180 => 37,  175 => 33,  170 => 197,  166 => 195,  164 => 194,  161 => 193,  159 => 102,  154 => 100,  151 => 99,  145 => 95,  142 => 94,  139 => 93,  137 => 92,  129 => 87,  124 => 84,  120 => 82,  118 => 80,  115 => 79,  113 => 74,  110 => 73,  108 => 37,  105 => 36,  103 => 35,  100 => 34,  98 => 33,  93 => 31,  87 => 30,  80 => 29,  77 => 27,  72 => 25,  67 => 24,  64 => 23,  62 => 22,  59 => 21,  56 => 20,  50 => 18,  45 => 15,  42 => 14,  33 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% block list_table %}*/
/*     <div class="col-xs-12 col-md-12">*/
/*         {% set batchactions = admin.batchactions %}*/
/*         {% if admin.hasRoute('batch') and batchactions|length %}*/
/*             <form action="{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}" method="POST" >*/
/*             <input type="hidden" name="_sonata_csrf_token" value="{{ csrf_token }}">*/
/*         {% endif %}*/
/* */
/*         {# Add a margin if no pager to prevent dropdown cropping on window #}*/
/*         <div class="box box-primary" {% if admin.datagrid.pager.lastPage == 1 %}style="margin-bottom: 100px;"{% endif %}>*/
/*             <div class="box-body {% if admin.datagrid.results|length > 0 %}table-responsive no-padding{% endif %}">*/
/*                 {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}*/
/* */
/*                 {% block list_header %}{% endblock %}*/
/* */
/*                 {% if admin.datagrid.results|length > 0 %}*/
/*                     <table class="table table-bordered table-striped sonata-ba-list">*/
/*                         {% block table_header %}*/
/*                             <thead>*/
/*                                 <tr class="sonata-ba-list-field-header">*/
/*                                     {% for field_description in admin.list.elements %}*/
/*                                         {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}*/
/*                                             <th class="sonata-ba-list-field-header sonata-ba-list-field-header-batch">*/
/*                                               <input type="checkbox" id="list_batch_checkbox">*/
/*                                             </th>*/
/*                                         {% elseif field_description.getOption('code') == '_select' %}*/
/*                                             <th class="sonata-ba-list-field-header sonata-ba-list-field-header-select"></th>*/
/*                                         {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}*/
/*                                             {# Action buttons disabled in ajax view! #}*/
/*                                         {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}*/
/*                                             {# Disable fields with 'ajax_hidden' option set to true #}*/
/*                                         {% else %}*/
/*                                             {% set sortable = false %}*/
/*                                             {% if field_description.options.sortable is defined and field_description.options.sortable %}*/
/*                                                 {% set sortable             = true %}*/
/*                                                 {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}*/
/*                                                 {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}*/
/*                                                 {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}*/
/*                                                 {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}*/
/*                                             {% endif %}*/
/* */
/*                                             {% spaceless %}*/
/*                                                 <th class="sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.options.header_class is defined %} {{ field_description.options.header_class }}{% endif %}"{% if field_description.options.header_style is defined %} style="{{ field_description.options.header_style }}"{% endif %}>*/
/*                                                     {% if sortable %}<a href="{{ admin.generateUrl('list', sort_parameters) }}">{% endif %}*/
/*                                                     {{ admin.trans(field_description.label, {}, field_description.translationDomain) }}*/
/*                                                     {% if sortable %}</a>{% endif %}*/
/*                                                 </th>*/
/*                                             {% endspaceless %}*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </tr>*/
/*                             </thead>*/
/*                         {% endblock %}*/
/* */
/*                         {% block table_body %}*/
/*                             <tbody>*/
/*                                 {% include admin.getTemplate('outer_list_rows_' ~ admin.getListMode()) %}*/
/*                             </tbody>*/
/*                         {% endblock %}*/
/* */
/*                         {% block table_footer %}*/
/*                         {% endblock %}*/
/*                     </table>*/
/*                 {% else %}*/
/*                     <div class="info-box">*/
/*                         <span class="info-box-icon bg-aqua"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                         <div class="info-box-content">*/
/*                             <span class="info-box-text">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>*/
/*                             <div class="progress">*/
/*                                 <div class="progress-bar" style="width: 0%"></div>*/
/*                             </div>*/
/*                             <span class="progress-description">*/
/*                                 {% if not app.request.xmlHttpRequest %}*/
/*                                     {% include 'SonataAdminBundle:Button:create_button.html.twig' %}*/
/*                                 {% endif %}*/
/*                             </span>*/
/*                         </div><!-- /.info-box-content -->*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}*/
/*             </div>*/
/*             {% block list_footer %}*/
/*                 {% if admin.datagrid.results|length > 0 %}*/
/*                     <div class="box-footer">*/
/*                         <div class="form-inline clearfix">*/
/*                             {% if not app.request.isXmlHttpRequest %}*/
/*                                 <div class="pull-left">*/
/*                                     {% if admin.hasRoute('batch') and batchactions|length > 0  %}*/
/*                                         {% block batch %}*/
/*                                             <script>*/
/*                                                 {% block batch_javascript %}*/
/*                                                     jQuery(document).ready(function ($) {*/
/*                                                         $('#list_batch_checkbox').on('ifChanged', function () {*/
/*                                                             $(this)*/
/*                                                                 .closest('table')*/
/*                                                                 .find('td.sonata-ba-list-field-batch input[type="checkbox"], div.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                                                 .iCheck($(this).is(':checked') ? 'check' : 'uncheck')*/
/*                                                             ;*/
/*                                                         });*/
/* */
/*                                                         $('td.sonata-ba-list-field-batch input[type="checkbox"], div.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                                             .on('ifChanged', function () {*/
/*                                                                 $(this)*/
/*                                                                     .closest('tr, div.sonata-ba-list-field-batch')*/
/*                                                                     .toggleClass('sonata-ba-list-row-selected', $(this).is(':checked'))*/
/*                                                                 ;*/
/*                                                             })*/
/*                                                             .trigger('ifChanged')*/
/*                                                         ;*/
/*                                                     });*/
/*                                                 {% endblock %}*/
/*                                             </script>*/
/* */
/*                                         {% block batch_actions %}*/
/*                                             <label class="checkbox" for="{{ admin.uniqid }}_all_elements">*/
/*                                                 <input type="checkbox" name="all_elements" id="{{ admin.uniqid }}_all_elements">*/
/*                                                 {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}*/
/*                                                 ({{ admin.datagrid.pager.nbresults }})*/
/*                                             </label>*/
/* */
/*                                             <select name="action" style="width: auto; height: auto" class="form-control">*/
/*                                                 {% for action, options in batchactions %}*/
/*                                                     <option value="{{ action }}">{{ options.label|trans({}, options.translation_domain|default(admin.translationDomain)) }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                         {% endblock %}*/
/* */
/*                                             <input type="submit" class="btn btn-small btn-primary" value="{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}">*/
/*                                         {% endblock %}*/
/*                                     {% endif %}*/
/*                                 </div>*/
/* */
/* */
/*                                 <div class="pull-right">*/
/*                                     {% if admin.hasRoute('export') and admin.isGranted('EXPORT') and admin.getExportFormats()|length %}*/
/*                                         <div class="btn-group">*/
/*                                             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                                                 <i class="fa fa-share-square-o"></i>*/
/*                                                 {{ "label_export_download"|trans({}, "SonataAdminBundle") }}*/
/*                                                 <span class="caret"></span>*/
/*                                             </button>*/
/*                                             <ul class="dropdown-menu">*/
/*                                                 {% for format in admin.getExportFormats() %}*/
/*                                                 <li>*/
/*                                                     <a href="{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}">*/
/*                                                         <i class="fa fa-arrow-circle-o-down"></i>*/
/*                                                         {{ ("export_format_" ~ format)|trans({}, 'SonataAdminBundle') }}*/
/*                                                     </a>*/
/*                                                 <li>*/
/*                                                 {% endfor %}*/
/*                                             </ul>*/
/*                                         </div>*/
/* */
/*                                         &nbsp;-&nbsp;*/
/*                                     {% endif %}*/
/* */
/*                                     {% block pager_results %}*/
/*                                         {% include admin.getTemplate('pager_results') %}*/
/*                                     {% endblock %}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/* */
/*                         {% block pager_links %}*/
/*                             {% if admin.datagrid.pager.haveToPaginate() %}*/
/*                                 <hr/>*/
/*                                 {% include admin.getTemplate('pager_links') %}*/
/*                             {% endif %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         {% if admin.hasRoute('batch') and batchactions|length %}*/
/*             </form>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block list_filters_actions %}*/
/*     {%- if admin.datagrid.filters|length %}*/
/*         <ul class="nav navbar-nav navbar-right">*/
/* */
/*             <li class="dropdown sonata-actions">*/
/*                 <a href="#" class="dropdown-toggle sonata-ba-action" data-toggle="dropdown">*/
/*                     <i class="fa fa-filter"></i>*/
/*                     {{ 'link_filters'|trans({}, 'SonataAdminBundle') }} <b class="caret"></b>*/
/*                 </a>*/
/* */
/*                 <ul class="dropdown-menu" role="menu">*/
/*                     {% for filter in admin.datagrid.filters if (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) %}*/
/*                         <li>*/
/*                             <a href="#" class="sonata-toggle-filter sonata-ba-action" filter-target="filter-{{ admin.uniqid }}-{{ filter.name }}" filter-container="filter-container-{{ admin.uniqid() }}">*/
/*                                 <i class="fa {{ (filter.isActive() or filter.options['show_filter']) ? 'fa-check-square-o' : 'fa-square-o' }}"></i>{{ admin.trans(filter.label, {}, filter.translationDomain) }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     {% endif -%}*/
/* {% endblock %}*/
/* */
/* {% block list_filters %}*/
/*     {% if admin.datagrid.filters %}*/
/*         {% form_theme form admin.getTemplate('filter') %}*/
/* */
/*         <div class="col-xs-12 col-md-12 sonata-filters-box" style="display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}" id="filter-container-{{ admin.uniqid() }}">*/
/*             <div class="box box-primary" >*/
/*                 <div class="box-body">*/
/*                     <form class="sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}" action="{{ admin.generateUrl('list') }}" method="GET" role="form">*/
/*                         {{ form_errors(form) }}*/
/* */
/*                         <div class="row">*/
/*                             <div class="col-sm-9">*/
/*                                 {% set withAdvancedFilter = false %}*/
/*                                 {% for filter in admin.datagrid.filters %}*/
/*                                     <div class="form-group {% block sonata_list_filter_group_class %}{% endblock %}" id="filter-{{ admin.uniqid }}-{{ filter.name }}" sonata-filter="{{ (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) ? 'true' : 'false' }}" style="display: {% if (filter.isActive() and filter.options['show_filter'] is null) or (filter.options['show_filter'] is same as(true)) %}block{% else %}none{% endif %}">*/
/*                                         {% if filter.label is not same as(false) %}*/
/*                                             <label for="{{ form.children[filter.formName].children['value'].vars.id }}" class="col-sm-3 control-label">{{ admin.trans(filter.label, {}, filter.translationDomain) }}</label>*/
/*                                         {% endif %}*/
/*                                         {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}*/
/* */
/*                                         <div class="col-sm-4 advanced-filter">*/
/*                                             {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}*/
/*                                         </div>*/
/* */
/*                                         <div class="col-sm-4">*/
/*                                             {{ form_widget(form.children[filter.formName].children['value']) }}*/
/*                                         </div>*/
/* */
/*                                         <div class="col-sm-1">*/
/*                                             <label class="control-label">*/
/*                                                 <a href="#" class="sonata-toggle-filter sonata-ba-action" filter-target="filter-{{ admin.uniqid }}-{{ filter.name }}" filter-container="filter-container-{{ admin.uniqid() }}">*/
/*                                                     <i class="fa fa-minus-circle"></i>*/
/*                                                 </a>*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     {% if filter.options['advanced_filter'] %}*/
/*                                         {% set withAdvancedFilter = true %}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                             <div class="col-sm-3 text-center">*/
/*                                 <input type="hidden" name="filter[_page]" id="filter__page" value="1">*/
/* */
/*                                 {% set foo = form.children['_page'].setRendered() %}*/
/*                                 {{ form_rest(form) }}*/
/* */
/*                                 <div class="form-group">*/
/*                                     <button type="submit" class="btn btn-primary">*/
/*                                         <i class="fa fa-filter"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}*/
/*                                     </button>*/
/* */
/*                                     <a class="btn btn-default" href="{{ admin.generateUrl('list', {filters: 'reset'}) }}">*/
/*                                         {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}*/
/*                                     </a>*/
/*                                 </div>*/
/* */
/*                                 {% if withAdvancedFilter %}*/
/*                                     <div class="form-group">*/
/*                                         <a href="#" data-toggle="advanced-filter">*/
/*                                             <i class="fa fa-cogs"></i>*/
/*                                             {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {% for paramKey, paramValue in admin.persistentParameters %}*/
/*                             <input type="hidden" name="{{ paramKey }}" value="{{ paramValue }}">*/
/*                         {% endfor %}*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
