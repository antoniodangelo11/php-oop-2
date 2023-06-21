<?php
include_once __DIR__ . '/Product.php';
class Food extends Product {
    public function __construct (
        int $id,
        string $title,
        int $price,
        string $img,
        Category $category,
        string $description,
        protected string $age, 
        protected string $weight,
    ) {
        parent::__construct($id, $title, $price, $img, $category, $description);
    }

    public function printCard() {
        $type = get_class($this);
        return "
			<div class=\"col\">
				<div class=\"card h-100\">
					<img src=\"{$this->img}\" class=\"card-img-top\" alt=\"{$this->title}\">
					<div class=\"card-body\">
						<h5 class=\"card-title\">{$this->title}</h5>
						<p class=\"card-text\">{$this->description}</p>
					</div>
					<ul class=\"list-group list-group-flush\">
						<li class=\"list-group-item\">Type: {$type}</li>
						<li class=\"list-group-item\">Category: {$this->category->getName()}</li>
						<li class=\"list-group-item\">Peso: {$this->weight}</li>
						<li class=\"list-group-item\">Età: {$this->age}</li>
						<li class=\"list-group-item\">Prezzo: {$this->getFormattedPrice()}</li>
					</ul>
					<div class=\"card-body\">
						<a href=\"#\" class=\"card-link\">Details</a>
					</div>
				</div>
			</div>
		";
    }
}
