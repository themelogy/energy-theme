<?php
namespace Themes\Energy\Presenter;

use Nwidart\Menus\Presenters\Presenter;

class HeaderMenuPresenter extends Presenter
{
    /**
     * {@inheritdoc }.
     */
    public function getOpenTagWrapper()
    {
        return PHP_EOL.'<ul class="nav navbar-nav">'.PHP_EOL;
    }

    /**
     * {@inheritdoc }.
     */
    public function getCloseTagWrapper()
    {
        //$navigation_ext = \View::make('partials.header.navigation.navigation-ext');
        return PHP_EOL.'</ul>'.PHP_EOL;
    }

    public function getCloseMegaTagWrapper()
    {
        return PHP_EOL.'</div>
                    </div>'.PHP_EOL;
    }

    public function getOpenMegaTagWrapper()
    {
        return PHP_EOL.'<div class="gfx-mega-content">
                            <div class="row">'.PHP_EOL;
    }

    public function getOpenMegaColumnTagWrapper()
    {
        return PHP_EOL.'<div class="col-lg-3 col-sm-3">
                            <ul class="mega-menu-list">'.PHP_EOL;
    }

    public function getCloseMegaColumnTagWrapper()
    {
        return PHP_EOL.'     </ul>
                         </div>'.PHP_EOL;
    }

    /**
     * {@inheritdoc }.
     */
    public function getMenuWithoutDropdownWrapper($item)
    {
        $link = '<li '.$this->getActiveState($item).'><a href="'.$item->getUrl().'" '.$item->getAttributes().'>';
        $link .= ' '. $item->title . '</a></li>'.PHP_EOL;
        return $link;
    }

    /**
     * {@inheritdoc }.
     */
    public function getActiveState($item, $state = ' class="current active"')
    {
        return $item->isActive() ? $state : null;
    }

    /**
     * Get active state on child items.
     *
     * @param $item
     * @param string $state
     *
     * @return null|string
     */
    public function getActiveStateOnChild($item, $state = 'current')
    {
        return $item->hasActiveOnChild() ? $state : null;
    }

    /**
     * {@inheritdoc }.
     */
    public function getDividerWrapper()
    {
        return '';
    }

    /**
     * {@inheritdoc }.
     */
    public function getHeaderWrapper($item)
    {
        return '<li class="dropdown-menu">'.$item->title.'</li>';
    }

    /**
     * {@inheritdoc }.
     */
    public function getMenuWithDropDownWrapper($item)
    {
        return '<li class="dropdown '.$this->getActiveState($item, ' active').$this->getActiveStateOnChild($item, ' active').'">
		          <a href="'.$item->getUrl().'">
				    '.$item->title.'
				    <b class="caret"></b>
			      </a>
                    <!-- submenu-wrapper -->
                    <div class="submenu-wrapper submenu-wrapper-topbottom">
                        <!-- submenu-inner -->
                        <div class="submenu-inner  submenu-inner-topbottom">
                          <ul class="dropdown-menu">
                            '.$this->getChildMenuItems($item).'
                          </ul>
                        </div>
                    </div>
		      	</li>'
        .PHP_EOL;
    }

    /**
     * @param $item
     * @return string
     */
    public function getMegaMenuWithDropDownWrapper($item)
    {
        return '<li class="dropdown '.$this->getActiveStateOnChild($item, ' current').'">
		          <a href="#" class="c-link dropdown-toggle">
					'.$item->getIcon().' '.$item->title.'
			      </a>
			      <ul class="dropdown-menu c-menu-type-classic c-pull-left">
			        '.$this->getMegaMenuItems($item).'
			      </ul>
		      	</li>'
        .PHP_EOL;
    }

    /**
     * @param \Nwidart\Menus\MenuItem $item
     * @return string
     */
    public function getMultiLevelDropdownWrapper($item)
    {
        return '<li class="dropdown '.$this->getActiveStateOnChild($item, ' current').'">
		          <a href="'.$item->getUrl().'">
					'.$item->getIcon().' '.$item->title.'
					<span class="fa fa-caret-right"></span>
			      </a>
                  <div class="submenu-sub-wrapper submenu-sub-wrapper-leftright">
                    <div class="submenu-sub-inner submenu-sub-inner-leftright">
                        <ul class="sub-dropdown-menu">
			      	        '.$this->getChildMenuItems($item).'
			            </ul>
			        </div>
			      </div>
		      	</li>'
        .PHP_EOL;
    }
}
