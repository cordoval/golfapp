<?php

/* form_div_layout.html.twig */
class __TwigTemplate_b3caf58aa19a0bae42b72cf73e496b9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'widget_choice_options' => array($this, 'block_widget_choice_options'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'field_widget' => array($this, 'block_field_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'generic_label' => array($this, 'block_generic_label'),
            'field_label' => array($this, 'block_field_label'),
            'form_label' => array($this, 'block_form_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'field_row' => array($this, 'block_field_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'field_enctype' => array($this, 'block_field_enctype'),
            'field_errors' => array($this, 'block_field_errors'),
            'field_rest' => array($this, 'block_field_rest'),
            'field_rows' => array($this, 'block_field_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('widget_choice_options', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('date_widget', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('time_widget', $context, $blocks);
        // line 123
        echo "
";
        // line 124
        $this->displayBlock('number_widget', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('money_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('url_widget', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('search_widget', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('field_widget', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('password_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('email_widget', $context, $blocks);
        // line 191
        echo "
";
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('generic_label', $context, $blocks);
        // line 202
        echo "
";
        // line 203
        $this->displayBlock('field_label', $context, $blocks);
        // line 209
        echo "
";
        // line 210
        $this->displayBlock('form_label', $context, $blocks);
        // line 215
        echo "
";
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 223
        echo "
";
        // line 224
        $this->displayBlock('field_row', $context, $blocks);
        // line 233
        echo "
";
        // line 234
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 237
        echo "
";
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('field_enctype', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('field_errors', $context, $blocks);
        // line 257
        echo "
";
        // line 258
        $this->displayBlock('field_rest', $context, $blocks);
        // line 267
        echo "
";
        // line 269
        echo "
";
        // line 270
        $this->displayBlock('field_rows', $context, $blocks);
        // line 278
        echo "
";
        // line 279
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 285
        echo "
";
        // line 286
        $this->displayBlock('widget_container_attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <div ";
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        echo ">
        ";
        // line 6
        $this->displayBlock('field_rows', $context, $blocks);
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 12
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 15
            echo "        ";
            $context['attr'] = twig_array_merge($this->getContext($context, 'attr'), array("data-prototype" => $this->env->getExtension('form')->renderRow($this->getContext($context, 'prototype'))));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $this->displayBlock('form_widget', $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 22
        ob_start();
        // line 23
        echo "    <textarea ";
        $this->displayBlock('widget_attributes', $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_widget_choice_options($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'options'));
        foreach ($context['_seq'] as $context['choice'] => $context['label']) {
            // line 30
            echo "        ";
            if ($this->env->getExtension('form')->isChoiceGroup($this->getContext($context, 'label'))) {
                // line 31
                echo "            <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'choice')), "html");
                echo "\">
                ";
                // line 32
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'label'));
                foreach ($context['_seq'] as $context['nestedChoice'] => $context['nestedLabel']) {
                    // line 33
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'nestedChoice'), "html");
                    echo "\"";
                    if ($this->env->getExtension('form')->isChoiceSelected($this->getContext($context, 'form'), $this->getContext($context, 'nestedChoice'))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'nestedLabel')), "html");
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nestedChoice'], $context['nestedLabel'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 35
                echo "            </optgroup>
        ";
            } else {
                // line 37
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, 'choice'), "html");
                echo "\"";
                if ($this->env->getExtension('form')->isChoiceSelected($this->getContext($context, 'form'), $this->getContext($context, 'choice'))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'label')), "html");
                echo "</option>
        ";
            }
            // line 39
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 43
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 44
        ob_start();
        // line 45
        echo "    ";
        if ($this->getContext($context, 'expanded')) {
            // line 46
            echo "        <div ";
            $this->displayBlock('widget_container_attributes', $context, $blocks);
            echo ">
        ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'form'));
            foreach ($context['_seq'] as $context['_key'] => $context['child']) {
                // line 48
                echo "            ";
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'child'));
                echo "
            ";
                // line 49
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'child'));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 51
            echo "        </div>
    ";
        } else {
            // line 53
            echo "    <select ";
            $this->displayBlock('widget_attributes', $context, $blocks);
            if ($this->getContext($context, 'multiple')) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 54
            if ((!twig_test_none($this->getContext($context, 'empty_value')))) {
                // line 55
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'empty_value')), "html");
                echo "</option>
        ";
            }
            // line 57
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, 'preferred_choices')) > 0)) {
                // line 58
                echo "            ";
                $context['options'] = $this->getContext($context, 'preferred_choices');
                // line 59
                echo "            ";
                $this->displayBlock('widget_choice_options', $context, $blocks);
                echo "
            <option disabled=\"disabled\">";
                // line 60
                echo twig_escape_filter($this->env, $this->getContext($context, 'separator'), "html");
                echo "</option>
        ";
            }
            // line 62
            echo "        ";
            $context['options'] = $this->getContext($context, 'choices');
            // line 63
            echo "        ";
            $this->displayBlock('widget_choice_options', $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 69
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 70
        ob_start();
        // line 71
        echo "    <input type=\"checkbox\" ";
        $this->displayBlock('widget_attributes', $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
            echo "\"";
        }
        if ($this->getContext($context, 'checked')) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 75
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 76
        ob_start();
        // line 77
        echo "    <input type=\"radio\" ";
        $this->displayBlock('widget_attributes', $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
            echo "\"";
        }
        if ($this->getContext($context, 'checked')) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 82
        ob_start();
        // line 83
        echo "    ";
        if (($this->getContext($context, 'widget') == "single_text")) {
            // line 84
            echo "        ";
            $this->displayBlock('field_widget', $context, $blocks);
            echo "
    ";
        } else {
            // line 86
            echo "        <div ";
            $this->displayBlock('widget_container_attributes', $context, $blocks);
            echo ">
            ";
            // line 87
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "date", array(), "any", false));
            echo "
            ";
            // line 88
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "time", array(), "any", false));
            echo "
            ";
            // line 89
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "date", array(), "any", false));
            echo "
            ";
            // line 90
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "time", array(), "any", false));
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 96
    public function block_date_widget($context, array $blocks = array())
    {
        // line 97
        ob_start();
        // line 98
        echo "    ";
        if (($this->getContext($context, 'widget') == "single_text")) {
            // line 99
            echo "        ";
            $this->displayBlock('field_widget', $context, $blocks);
            echo "
    ";
        } else {
            // line 101
            echo "        <div ";
            $this->displayBlock('widget_container_attributes', $context, $blocks);
            echo ">
            ";
            // line 102
            echo twig_strtr($this->getContext($context, 'date_pattern'), array("{{ year }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "year", array(), "any", false)), "{{ month }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "month", array(), "any", false)), "{{ day }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "day", array(), "any", false))));
            // line 106
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 112
    public function block_time_widget($context, array $blocks = array())
    {
        // line 113
        ob_start();
        // line 114
        echo "    ";
        if (($this->getContext($context, 'widget') == "single_text")) {
            // line 115
            echo "        ";
            $this->displayBlock('field_widget', $context, $blocks);
            echo "
    ";
        } else {
            // line 117
            echo "        <div ";
            $this->displayBlock('widget_container_attributes', $context, $blocks);
            echo ">
            ";
            // line 118
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "hour", array(), "any", false), array("attr" => array("size" => "1")));
            echo ":";
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "minute", array(), "any", false), array("attr" => array("size" => "1")));
            if ($this->getContext($context, 'with_seconds')) {
                echo ":";
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "second", array(), "any", false), array("attr" => array("size" => "1")));
            }
            // line 119
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 124
    public function block_number_widget($context, array $blocks = array())
    {
        // line 125
        ob_start();
        // line 126
        echo "    ";
        // line 127
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "text")) : ("text"));
        // line 128
        echo "    ";
        $this->displayBlock('field_widget', $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 132
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 133
        ob_start();
        // line 134
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "number")) : ("number"));
        // line 135
        echo "    ";
        $this->displayBlock('field_widget', $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 139
    public function block_money_widget($context, array $blocks = array())
    {
        // line 140
        ob_start();
        // line 141
        echo "    ";
        echo twig_strtr($this->getContext($context, 'money_pattern'), array("{{ widget }}" => $this->renderBlock("field_widget", $context, $blocks)));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 145
    public function block_url_widget($context, array $blocks = array())
    {
        // line 146
        ob_start();
        // line 147
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "url")) : ("url"));
        // line 148
        echo "    ";
        $this->displayBlock('field_widget', $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 152
    public function block_search_widget($context, array $blocks = array())
    {
        // line 153
        ob_start();
        // line 154
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "search")) : ("search"));
        // line 155
        echo "    ";
        $this->displayBlock('field_widget', $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 159
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 160
        ob_start();
        // line 161
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "text")) : ("text"));
        // line 162
        echo "    ";
        $this->displayBlock('field_widget', $context, $blocks);
        echo " %
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 166
    public function block_field_widget($context, array $blocks = array())
    {
        // line 167
        ob_start();
        // line 168
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "text")) : ("text"));
        // line 169
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'type'), "html");
        echo "\" ";
        $this->displayBlock('widget_attributes', $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
        echo "\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 173
    public function block_password_widget($context, array $blocks = array())
    {
        // line 174
        ob_start();
        // line 175
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "password")) : ("password"));
        // line 176
        echo "    ";
        $this->displayBlock('field_widget', $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 180
    public function block_hidden_widget($context, array $blocks = array())
    {
        // line 181
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "hidden")) : ("hidden"));
        // line 182
        echo "    ";
        $this->displayBlock('field_widget', $context, $blocks);
        echo "
";
    }

    // line 185
    public function block_email_widget($context, array $blocks = array())
    {
        // line 186
        ob_start();
        // line 187
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "email")) : ("email"));
        // line 188
        echo "    ";
        $this->displayBlock('field_widget', $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 194
    public function block_generic_label($context, array $blocks = array())
    {
        // line 195
        ob_start();
        // line 196
        echo "    ";
        if ($this->getContext($context, 'required')) {
            // line 197
            echo "        ";
            $context['attr'] = twig_array_merge($this->getContext($context, 'attr'), array("class" => ((($this->getAttribute(((array_key_exists("attr", $context)) ? (twig_default_filter($this->getContext($context, 'attr'))) : ("")), "class", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'attr'), "class", array(), "any", false), "")) : ("")) . " required")));
            // line 198
            echo "    ";
        }
        // line 199
        echo "    <label";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
        foreach ($context['_seq'] as $context['attrname'] => $context['attrvalue']) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrname'), "html");
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrvalue'), "html");
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'label')), "html");
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 203
    public function block_field_label($context, array $blocks = array())
    {
        // line 204
        ob_start();
        // line 205
        echo "    ";
        $context['attr'] = twig_array_merge($this->getContext($context, 'attr'), array("for" => $this->getContext($context, 'id')));
        // line 206
        echo "    ";
        $this->displayBlock('generic_label', $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 210
    public function block_form_label($context, array $blocks = array())
    {
        // line 211
        ob_start();
        // line 212
        echo "    ";
        $this->displayBlock('generic_label', $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 218
    public function block_repeated_row($context, array $blocks = array())
    {
        // line 219
        ob_start();
        // line 220
        echo "    ";
        $this->displayBlock('field_rows', $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 224
    public function block_field_row($context, array $blocks = array())
    {
        // line 225
        ob_start();
        // line 226
        echo "    <div>
        ";
        // line 227
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'form'), ((array_key_exists("label", $context)) ? (twig_default_filter($this->getContext($context, 'label'), null)) : (null)));
        echo "
        ";
        // line 228
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
        echo "
        ";
        // line 229
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 234
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 235
        echo "    ";
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
";
    }

    // line 240
    public function block_field_enctype($context, array $blocks = array())
    {
        // line 241
        ob_start();
        // line 242
        echo "    ";
        if ($this->getContext($context, 'multipart')) {
            echo "enctype=\"multipart/form-data\"";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 246
    public function block_field_errors($context, array $blocks = array())
    {
        // line 247
        ob_start();
        // line 248
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, 'errors')) > 0)) {
            // line 249
            echo "    <ul>
        ";
            // line 250
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'errors'));
            foreach ($context['_seq'] as $context['_key'] => $context['error']) {
                // line 251
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, 'error'), "messageTemplate", array(), "any", false), $this->getAttribute($this->getContext($context, 'error'), "messageParameters", array(), "any", false), "validators"), "html");
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 253
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 258
    public function block_field_rest($context, array $blocks = array())
    {
        // line 259
        ob_start();
        // line 260
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'form'));
        foreach ($context['_seq'] as $context['_key'] => $context['child']) {
            // line 261
            echo "        ";
            if ((!$this->getAttribute($this->getContext($context, 'child'), "rendered", array(), "any", false))) {
                // line 262
                echo "            ";
                echo $this->env->getExtension('form')->renderRow($this->getContext($context, 'child'));
                echo "
        ";
            }
            // line 264
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 270
    public function block_field_rows($context, array $blocks = array())
    {
        // line 271
        ob_start();
        // line 272
        echo "    ";
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
        echo "
    ";
        // line 273
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'form'));
        foreach ($context['_seq'] as $context['_key'] => $context['child']) {
            // line 274
            echo "        ";
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, 'child'));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 279
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 280
        ob_start();
        // line 281
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'full_name'), "html");
        echo "\"";
        if ($this->getContext($context, 'read_only')) {
            echo " disabled=\"disabled\"";
        }
        if ($this->getContext($context, 'required')) {
            echo " required=\"required\"";
        }
        if ($this->getContext($context, 'max_length')) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'max_length'), "html");
            echo "\"";
        }
        if ($this->getContext($context, 'pattern')) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'pattern'), "html");
            echo "\"";
        }
        // line 282
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
        foreach ($context['_seq'] as $context['attrname'] => $context['attrvalue']) {
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrname'), "html");
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrvalue'), "html");
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 286
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 287
        ob_start();
        // line 288
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\"
    ";
        // line 289
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
        foreach ($context['_seq'] as $context['attrname'] => $context['attrvalue']) {
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrname'), "html");
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrvalue'), "html");
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function isTraitable()
    {
        return true;
    }
}
