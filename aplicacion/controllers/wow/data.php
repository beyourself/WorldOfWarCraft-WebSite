<?php

/**
 * Copyright (C) 2013 Apocalypsecore <https://Apocalypsecore.tk>
 * Copyright (C) 2011 Shadez <https://github.com/Shadez>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 **/

class Data extends Controller {
    public function main() {
        if(!isset($this->m_actions['action3'])) {
            exit;
        }
        $exploded = explode('?', $this->m_actions['action3']);
        if($exploded) {
            $this->m_actions['action3'] = $exploded[0];
        }
        $this->m_actions['action3'] = str_replace(array('-', '.'), '_', $this->m_actions['action3']);
        switch($this->m_actions['action3']) {
            case 'menu_json':
                $this->{'action_' . $this->m_actions['action3']}();
                break;
        }
    }
    
    public function action_menu_json() {
        header('Content-type: text/plain');
        echo WoW_Locale::GetMenuString();
    }
}

?>