<?php
	class seo_texts_app_controller extends app_controller {

		/**
		 * Диспетчер модуля
		 */
		public function __dispatch($uri) {
			return false;
		}
		
		/**
		 * Метод построения блока с SEO текстами
		 */
		public function block($city_id, $type_id, $category_id = 0) {
				
			// получаем данные
			$data = $this->seo_texts->getItem($city_id, $type_id, $category_id);
			if(empty($data)) {
				return '';
			}
			
			return $this->_tpl->render('seo_texts/block', $data);
		}
		
	}
?>