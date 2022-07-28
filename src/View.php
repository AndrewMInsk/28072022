<?php

    namespace src;
    class View
    {
        function generate($template_view, $data = null)
        {
            if(is_array($data)) {
                extract($data);
            }
            include 'view/' . $template_view;
        }
    }