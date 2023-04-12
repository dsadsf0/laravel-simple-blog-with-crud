<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter {
  public const TITLE = 'title';
  public const BODY = 'body';
  public const CATEGORY_ID = 'category_id';
  public const TAGS = 'tags';

  protected function getCallbacks(): array
  {
    return [
      self::TITLE => [$this, 'title'],
      self::BODY => [$this, 'body'],
      self::CATEGORY_ID => [$this, 'categoryId'],
      self::TAGS => [$this, 'tags'],
    ];
  }

  public function title(Builder $builder, $value) 
  {
    $builder->where(self::TITLE, 'like', "%{$value}%");
  }

  public function body(Builder$builder, $value)
  {
    $builder->where(self::BODY, 'like', "%{$value}%");
  }

  public function categoryId(Builder$builder, $value)
  {
    $builder->where(self::CATEGORY_ID, 'like', $value);
  }
  public function tags(Builder$builder, $value)
  {
    $builder->where(self::TAGS, 'like', $value);
  }
}