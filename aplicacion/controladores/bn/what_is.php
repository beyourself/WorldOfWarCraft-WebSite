<?php

/**
 * Copyright (C) 2011 - 2013 Apocalypsecore <https://Apocalypsecore.tk>
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

Class What_is extends Controller {
    public function main() {
        WoW_Template::SetTemplateTheme('bn');
        WoW_Template::SetMenuIndex('index');
        WoW_Template::SetPageIndex('landing');
        WoW_Template::SetPageData('landing', 'what_is');
        WoW_Template::LoadTemplate('page_landing');
    }
}

?>