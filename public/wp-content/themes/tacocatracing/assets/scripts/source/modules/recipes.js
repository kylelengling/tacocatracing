const $ = require('jQuery');
const domready = require('domready');

module.exports = (function() {
  const _init = function() {
      _liquors = $('.c__liquor-type');
      _liquorList = $('.c__liquor-recipes-container');

      _liquors.on('click', function(e) {
        e.preventDefault();
        setSelected(_liquors.index(this));
      });
      $(document).on('click', '.c__liquor-recipe', function(e) {
        e.preventDefault();
        setSelectedRecipes(_recipes.index(this));
      });
      $('.arrow-right').on('click', function(e) {
        e.preventDefault();
        recipeCounterUp();
      });
      $('.arrow-left').on('click', function(e) {
        e.preventDefault();
        recipeCounterDown();
      });
      setSelected(0);
  };


  let _liquors = null;
  let _liquorList = null;
  let _recipes = null;
  let _recipesList = null;
  let _numberOfRecipes = null;
  let _activeRecipe = null;

  const setSelected = function(index) {
    _liquors.removeClass('is-selected');
    _liquorList.removeClass('is-selected');

    _liquors.eq(index).addClass('is-selected');
    _liquorList.eq(index).addClass('is-selected');

    _recipes = _liquorList.eq(index).find('.c__liquor-recipe');
    _recipesList = _liquorList.eq(index).find('.c__recipes-details');
    _numberOfRecipes = _recipesList.length;

    setSelectedRecipes(0);
  };

  const setSelectedRecipes = function(index) {
    _recipes.removeClass('is-selected');
    _recipesList.removeClass('is-selected');

    _recipes.eq(index).addClass('is-selected');
    _recipesList.eq(index).addClass('is-selected');
  }

  const setSelectedRecipe = function() {
    _recipes.removeClass('is-selected');
     _recipesList.removeClass('is-selected');

     _recipes.eq(_activeRecipe).addClass('is-selected');
     _recipesList.eq(_activeRecipe).addClass('is-selected');
  }

  const recipeCounterUp = function() {
    if (_activeRecipe >= _numberOfRecipes - 1) {
      _activeRecipe = 0;
    } else {
      _activeRecipe++;
    }
    setSelectedRecipe();
  }

  const recipeCounterDown = function() {
    if (_activeRecipe === 0) {
      _activeRecipe = _numberOfRecipes - 1;
    } else {
      _activeRecipe--;
    }
    setSelectedRecipe();

  }

  domready(function() {
    _init();
  });
})();
