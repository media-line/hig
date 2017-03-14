<?php 
	function pagination_list_render($list)
	{
		// Reverse output rendering for right-to-left display.
		$html = '<ul>';
		$html .= '<li class="pagination-prev">' . addTriangleStart($list['previous']['data']) . '</li>';

		foreach ($list['pages'] as $page)
		{
			$html .= '<li>' . $page['data'] . '</li>';
		}

		$html .= '<li class="pagination-next">' . addTriangleEnd($list['next']['data']) . '</li>';
		$html .= '</ul>';

		return $html;
    }
	
	function addTriangleStart ($data) {
		$dataTriangle = substr($data, 0, strpos($data, '>') + 1) . '<div class="joomshopping_pagination_back_tr"></div><div class="joomshopping_pagination_back">Предыдущая страница</div>' . substr($data, strrpos($data, '<'));
	    return $dataTriangle;
	}
	
	function addTriangleEnd ($data) {
		$dataTriangle = substr($data, 0, strpos($data, '>') + 1) . '<div class="joomshopping_pagination_next">Следующая страница</div><div class="joomshopping_pagination_next_tr"></div></a>';
	    return $dataTriangle;
	}