<?php
/**
 * A helper file for Laravel 5, to provide autocomplete information to your IDE
 * Generated for Laravel 5.2.31 on 2016-05-03.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace {
    exit("This file should not be included, only analyzed by your IDE");

    class TicketitStatus extends \Kordy\Ticketit\Facades\TicketitStatusFacade{
        
        /**
         * Clear the list of booted models so they will be re-booted.
         *
         * @return void 
         * @static 
         */
        public static function clearBootedModels(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::clearBootedModels();
        }
        
        /**
         * Register a new global scope on the model.
         *
         * @param \Illuminate\Database\Eloquent\Scope|\Closure|string $scope
         * @param \Closure|null $implementation
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function addGlobalScope($scope, $implementation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::addGlobalScope($scope, $implementation);
        }
        
        /**
         * Determine if a model has a global scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return bool 
         * @static 
         */
        public static function hasGlobalScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::hasGlobalScope($scope);
        }
        
        /**
         * Get a global scope registered with the model.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return \Illuminate\Database\Eloquent\Scope|\Closure|null 
         * @static 
         */
        public static function getGlobalScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getGlobalScope($scope);
        }
        
        /**
         * Get the global scopes for this class instance.
         *
         * @return array 
         * @static 
         */
        public static function getGlobalScopes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getGlobalScopes();
        }
        
        /**
         * Register an observer with the Model.
         *
         * @param object|string $class
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function observe($class, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::observe($class, $priority);
        }
        
        /**
         * Fill the model with an array of attributes.
         *
         * @param array $attributes
         * @return $this 
         * @throws \Illuminate\Database\Eloquent\MassAssignmentException
         * @static 
         */
        public static function fill($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::fill($attributes);
        }
        
        /**
         * Fill the model with an array of attributes. Force mass assignment.
         *
         * @param array $attributes
         * @return $this 
         * @static 
         */
        public static function forceFill($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::forceFill($attributes);
        }
        
        /**
         * Create a new instance of the given model.
         *
         * @param array $attributes
         * @param bool $exists
         * @return static 
         * @static 
         */
        public static function newInstance($attributes = array(), $exists = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::newInstance($attributes, $exists);
        }
        
        /**
         * Create a new model instance that is existing.
         *
         * @param array $attributes
         * @param string|null $connection
         * @return static 
         * @static 
         */
        public static function newFromBuilder($attributes = array(), $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::newFromBuilder($attributes, $connection);
        }
        
        /**
         * Create a collection of models from plain arrays.
         *
         * @param array $items
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function hydrate($items, $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::hydrate($items, $connection);
        }
        
        /**
         * Create a collection of models from a raw query.
         *
         * @param string $query
         * @param array $bindings
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function hydrateRaw($query, $bindings = array(), $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::hydrateRaw($query, $bindings, $connection);
        }
        
        /**
         * Save a new model and return the instance.
         *
         * @param array $attributes
         * @return static 
         * @static 
         */
        public static function create($attributes = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::create($attributes);
        }
        
        /**
         * Save a new model and return the instance. Allow mass-assignment.
         *
         * @param array $attributes
         * @return static 
         * @static 
         */
        public static function forceCreate($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::forceCreate($attributes);
        }
        
        /**
         * Begin querying the model.
         *
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function query(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::query();
        }
        
        /**
         * Begin querying the model on a given connection.
         *
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function on($connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::on($connection);
        }
        
        /**
         * Begin querying the model on the write connection.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function onWriteConnection(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::onWriteConnection();
        }
        
        /**
         * Get all of the models from the database.
         *
         * @param array|mixed $columns
         * @return \Illuminate\Database\Eloquent\Collection|static[] 
         * @static 
         */
        public static function all($columns = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::all($columns);
        }
        
        /**
         * Reload a fresh model instance from the database.
         *
         * @param array|string $with
         * @return $this|null 
         * @static 
         */
        public static function fresh($with = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::fresh($with);
        }
        
        /**
         * Eager load relations on the model.
         *
         * @param array|string $relations
         * @return $this 
         * @static 
         */
        public static function load($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::load($relations);
        }
        
        /**
         * Begin querying a model with eager loading.
         *
         * @param array|string $relations
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function with($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::with($relations);
        }
        
        /**
         * Append attributes to query when building a query.
         *
         * @param array|string $attributes
         * @return $this 
         * @static 
         */
        public static function append($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::append($attributes);
        }
        
        /**
         * Define a one-to-one relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasOne 
         * @static 
         */
        public static function hasOne($related, $foreignKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::hasOne($related, $foreignKey, $localKey);
        }
        
        /**
         * Define a polymorphic one-to-one relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $type
         * @param string $id
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphOne 
         * @static 
         */
        public static function morphOne($related, $name, $type = null, $id = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::morphOne($related, $name, $type, $id, $localKey);
        }
        
        /**
         * Define an inverse one-to-one or many relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $otherKey
         * @param string $relation
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo 
         * @static 
         */
        public static function belongsTo($related, $foreignKey = null, $otherKey = null, $relation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::belongsTo($related, $foreignKey, $otherKey, $relation);
        }
        
        /**
         * Define a polymorphic, inverse one-to-one or many relationship.
         *
         * @param string $name
         * @param string $type
         * @param string $id
         * @return \Illuminate\Database\Eloquent\Relations\MorphTo 
         * @static 
         */
        public static function morphTo($name = null, $type = null, $id = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::morphTo($name, $type, $id);
        }
        
        /**
         * Retrieve the fully qualified class name from a slug.
         *
         * @param string $class
         * @return string 
         * @static 
         */
        public static function getActualClassNameForMorph($class){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getActualClassNameForMorph($class);
        }
        
        /**
         * Define a one-to-many relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasMany 
         * @static 
         */
        public static function hasMany($related, $foreignKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::hasMany($related, $foreignKey, $localKey);
        }
        
        /**
         * Define a has-many-through relationship.
         *
         * @param string $related
         * @param string $through
         * @param string|null $firstKey
         * @param string|null $secondKey
         * @param string|null $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough 
         * @static 
         */
        public static function hasManyThrough($related, $through, $firstKey = null, $secondKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::hasManyThrough($related, $through, $firstKey, $secondKey, $localKey);
        }
        
        /**
         * Define a polymorphic one-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $type
         * @param string $id
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphMany 
         * @static 
         */
        public static function morphMany($related, $name, $type = null, $id = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::morphMany($related, $name, $type, $id, $localKey);
        }
        
        /**
         * Define a many-to-many relationship.
         *
         * @param string $related
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @param string $relation
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany 
         * @static 
         */
        public static function belongsToMany($related, $table = null, $foreignKey = null, $otherKey = null, $relation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::belongsToMany($related, $table, $foreignKey, $otherKey, $relation);
        }
        
        /**
         * Define a polymorphic many-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @param bool $inverse
         * @return \Illuminate\Database\Eloquent\Relations\MorphToMany 
         * @static 
         */
        public static function morphToMany($related, $name, $table = null, $foreignKey = null, $otherKey = null, $inverse = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::morphToMany($related, $name, $table, $foreignKey, $otherKey, $inverse);
        }
        
        /**
         * Define a polymorphic, inverse many-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphToMany 
         * @static 
         */
        public static function morphedByMany($related, $name, $table = null, $foreignKey = null, $otherKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::morphedByMany($related, $name, $table, $foreignKey, $otherKey);
        }
        
        /**
         * Get the joining table name for a many-to-many relation.
         *
         * @param string $related
         * @return string 
         * @static 
         */
        public static function joiningTable($related){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::joiningTable($related);
        }
        
        /**
         * Destroy the models for the given IDs.
         *
         * @param array|int $ids
         * @return int 
         * @static 
         */
        public static function destroy($ids){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::destroy($ids);
        }
        
        /**
         * Delete the model from the database.
         *
         * @return bool|null 
         * @throws \Exception
         * @static 
         */
        public static function delete(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::delete();
        }
        
        /**
         * Force a hard delete on a soft deleted model.
         * 
         * This method protects developers from running forceDelete when trait is missing.
         *
         * @return bool|null 
         * @static 
         */
        public static function forceDelete(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::forceDelete();
        }
        
        /**
         * Register a saving model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function saving($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::saving($callback, $priority);
        }
        
        /**
         * Register a saved model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function saved($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::saved($callback, $priority);
        }
        
        /**
         * Register an updating model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function updating($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::updating($callback, $priority);
        }
        
        /**
         * Register an updated model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function updated($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::updated($callback, $priority);
        }
        
        /**
         * Register a creating model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function creating($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::creating($callback, $priority);
        }
        
        /**
         * Register a created model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function created($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::created($callback, $priority);
        }
        
        /**
         * Register a deleting model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function deleting($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::deleting($callback, $priority);
        }
        
        /**
         * Register a deleted model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function deleted($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::deleted($callback, $priority);
        }
        
        /**
         * Remove all of the event listeners for the model.
         *
         * @return void 
         * @static 
         */
        public static function flushEventListeners(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::flushEventListeners();
        }
        
        /**
         * Get the observable event names.
         *
         * @return array 
         * @static 
         */
        public static function getObservableEvents(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getObservableEvents();
        }
        
        /**
         * Set the observable event names.
         *
         * @param array $observables
         * @return $this 
         * @static 
         */
        public static function setObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setObservableEvents($observables);
        }
        
        /**
         * Add an observable event name.
         *
         * @param array|mixed $observables
         * @return void 
         * @static 
         */
        public static function addObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::addObservableEvents($observables);
        }
        
        /**
         * Remove an observable event name.
         *
         * @param array|mixed $observables
         * @return void 
         * @static 
         */
        public static function removeObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::removeObservableEvents($observables);
        }
        
        /**
         * Update the model in the database.
         *
         * @param array $attributes
         * @param array $options
         * @return bool|int 
         * @static 
         */
        public static function update($attributes = array(), $options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::update($attributes, $options);
        }
        
        /**
         * Save the model and all of its relationships.
         *
         * @return bool 
         * @static 
         */
        public static function push(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::push();
        }
        
        /**
         * Save the model to the database.
         *
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function save($options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::save($options);
        }
        
        /**
         * Save the model to the database using transaction.
         *
         * @param array $options
         * @return bool 
         * @throws \Throwable
         * @static 
         */
        public static function saveOrFail($options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::saveOrFail($options);
        }
        
        /**
         * Touch the owning relations of the model.
         *
         * @return void 
         * @static 
         */
        public static function touchOwners(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::touchOwners();
        }
        
        /**
         * Determine if the model touches a given relation.
         *
         * @param string $relation
         * @return bool 
         * @static 
         */
        public static function touches($relation){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::touches($relation);
        }
        
        /**
         * Update the model's update timestamp.
         *
         * @return bool 
         * @static 
         */
        public static function touch(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::touch();
        }
        
        /**
         * Set the value of the "created at" attribute.
         *
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setCreatedAt($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setCreatedAt($value);
        }
        
        /**
         * Set the value of the "updated at" attribute.
         *
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setUpdatedAt($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setUpdatedAt($value);
        }
        
        /**
         * Get the name of the "created at" column.
         *
         * @return string 
         * @static 
         */
        public static function getCreatedAtColumn(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getCreatedAtColumn();
        }
        
        /**
         * Get the name of the "updated at" column.
         *
         * @return string 
         * @static 
         */
        public static function getUpdatedAtColumn(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getUpdatedAtColumn();
        }
        
        /**
         * Get a fresh timestamp for the model.
         *
         * @return \Carbon\Carbon 
         * @static 
         */
        public static function freshTimestamp(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::freshTimestamp();
        }
        
        /**
         * Get a fresh timestamp for the model.
         *
         * @return string 
         * @static 
         */
        public static function freshTimestampString(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::freshTimestampString();
        }
        
        /**
         * Get a new query builder for the model's table.
         *
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function newQuery(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::newQuery();
        }
        
        /**
         * Get a new query instance without a given scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function newQueryWithoutScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::newQueryWithoutScope($scope);
        }
        
        /**
         * Get a new query builder that doesn't have any global scopes.
         *
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function newQueryWithoutScopes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::newQueryWithoutScopes();
        }
        
        /**
         * Create a new Eloquent query builder for the model.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function newEloquentBuilder($query){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::newEloquentBuilder($query);
        }
        
        /**
         * Create a new Eloquent Collection instance.
         *
         * @param array $models
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function newCollection($models = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::newCollection($models);
        }
        
        /**
         * Create a new pivot model instance.
         *
         * @param \Illuminate\Database\Eloquent\Model $parent
         * @param array $attributes
         * @param string $table
         * @param bool $exists
         * @return \Illuminate\Database\Eloquent\Relations\Pivot 
         * @static 
         */
        public static function newPivot($parent, $attributes, $table, $exists){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::newPivot($parent, $attributes, $table, $exists);
        }
        
        /**
         * Get the table associated with the model.
         *
         * @return string 
         * @static 
         */
        public static function getTable(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getTable();
        }
        
        /**
         * Set the table associated with the model.
         *
         * @param string $table
         * @return $this 
         * @static 
         */
        public static function setTable($table){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setTable($table);
        }
        
        /**
         * Get the value of the model's primary key.
         *
         * @return mixed 
         * @static 
         */
        public static function getKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getKey();
        }
        
        /**
         * Get the queueable identity for the entity.
         *
         * @return mixed 
         * @static 
         */
        public static function getQueueableId(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getQueueableId();
        }
        
        /**
         * Get the primary key for the model.
         *
         * @return string 
         * @static 
         */
        public static function getKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getKeyName();
        }
        
        /**
         * Set the primary key for the model.
         *
         * @param string $key
         * @return $this 
         * @static 
         */
        public static function setKeyName($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setKeyName($key);
        }
        
        /**
         * Get the table qualified key name.
         *
         * @return string 
         * @static 
         */
        public static function getQualifiedKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getQualifiedKeyName();
        }
        
        /**
         * Get the value of the model's route key.
         *
         * @return mixed 
         * @static 
         */
        public static function getRouteKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getRouteKey();
        }
        
        /**
         * Get the route key for the model.
         *
         * @return string 
         * @static 
         */
        public static function getRouteKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getRouteKeyName();
        }
        
        /**
         * Determine if the model uses timestamps.
         *
         * @return bool 
         * @static 
         */
        public static function usesTimestamps(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::usesTimestamps();
        }
        
        /**
         * Get the class name for polymorphic relations.
         *
         * @return string 
         * @static 
         */
        public static function getMorphClass(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getMorphClass();
        }
        
        /**
         * Get the number of models to return per page.
         *
         * @return int 
         * @static 
         */
        public static function getPerPage(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getPerPage();
        }
        
        /**
         * Set the number of models to return per page.
         *
         * @param int $perPage
         * @return $this 
         * @static 
         */
        public static function setPerPage($perPage){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setPerPage($perPage);
        }
        
        /**
         * Get the default foreign key name for the model.
         *
         * @return string 
         * @static 
         */
        public static function getForeignKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getForeignKey();
        }
        
        /**
         * Get the hidden attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getHidden(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getHidden();
        }
        
        /**
         * Set the hidden attributes for the model.
         *
         * @param array $hidden
         * @return $this 
         * @static 
         */
        public static function setHidden($hidden){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setHidden($hidden);
        }
        
        /**
         * Add hidden attributes for the model.
         *
         * @param array|string|null $attributes
         * @return void 
         * @static 
         */
        public static function addHidden($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::addHidden($attributes);
        }
        
        /**
         * Make the given, typically hidden, attributes visible.
         *
         * @param array|string $attributes
         * @return $this 
         * @static 
         */
        public static function makeVisible($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::makeVisible($attributes);
        }
        
        /**
         * Make the given, typically hidden, attributes visible.
         *
         * @param array|string $attributes
         * @return $this 
         * @deprecated since version 5.2. Use the "makeVisible" method directly.
         * @static 
         */
        public static function withHidden($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::withHidden($attributes);
        }
        
        /**
         * Get the visible attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getVisible(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getVisible();
        }
        
        /**
         * Set the visible attributes for the model.
         *
         * @param array $visible
         * @return $this 
         * @static 
         */
        public static function setVisible($visible){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setVisible($visible);
        }
        
        /**
         * Add visible attributes for the model.
         *
         * @param array|string|null $attributes
         * @return void 
         * @static 
         */
        public static function addVisible($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::addVisible($attributes);
        }
        
        /**
         * Set the accessors to append to model arrays.
         *
         * @param array $appends
         * @return $this 
         * @static 
         */
        public static function setAppends($appends){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setAppends($appends);
        }
        
        /**
         * Get the fillable attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getFillable(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getFillable();
        }
        
        /**
         * Set the fillable attributes for the model.
         *
         * @param array $fillable
         * @return $this 
         * @static 
         */
        public static function fillable($fillable){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::fillable($fillable);
        }
        
        /**
         * Get the guarded attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getGuarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getGuarded();
        }
        
        /**
         * Set the guarded attributes for the model.
         *
         * @param array $guarded
         * @return $this 
         * @static 
         */
        public static function guard($guarded){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::guard($guarded);
        }
        
        /**
         * Disable all mass assignable restrictions.
         *
         * @param bool $state
         * @return void 
         * @static 
         */
        public static function unguard($state = true){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::unguard($state);
        }
        
        /**
         * Enable the mass assignment restrictions.
         *
         * @return void 
         * @static 
         */
        public static function reguard(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::reguard();
        }
        
        /**
         * Determine if current state is "unguarded".
         *
         * @return bool 
         * @static 
         */
        public static function isUnguarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::isUnguarded();
        }
        
        /**
         * Run the given callable while being unguarded.
         *
         * @param callable $callback
         * @return mixed 
         * @static 
         */
        public static function unguarded($callback){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::unguarded($callback);
        }
        
        /**
         * Determine if the given attribute may be mass assigned.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function isFillable($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::isFillable($key);
        }
        
        /**
         * Determine if the given key is guarded.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function isGuarded($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::isGuarded($key);
        }
        
        /**
         * Determine if the model is totally guarded.
         *
         * @return bool 
         * @static 
         */
        public static function totallyGuarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::totallyGuarded();
        }
        
        /**
         * Get the relationships that are touched on save.
         *
         * @return array 
         * @static 
         */
        public static function getTouchedRelations(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getTouchedRelations();
        }
        
        /**
         * Set the relationships that are touched on save.
         *
         * @param array $touches
         * @return $this 
         * @static 
         */
        public static function setTouchedRelations($touches){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setTouchedRelations($touches);
        }
        
        /**
         * Get the value indicating whether the IDs are incrementing.
         *
         * @return bool 
         * @static 
         */
        public static function getIncrementing(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getIncrementing();
        }
        
        /**
         * Set whether IDs are incrementing.
         *
         * @param bool $value
         * @return $this 
         * @static 
         */
        public static function setIncrementing($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setIncrementing($value);
        }
        
        /**
         * Convert the model instance to JSON.
         *
         * @param int $options
         * @return string 
         * @static 
         */
        public static function toJson($options = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::toJson($options);
        }
        
        /**
         * Convert the object into something JSON serializable.
         *
         * @return array 
         * @static 
         */
        public static function jsonSerialize(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::jsonSerialize();
        }
        
        /**
         * Convert the model instance to an array.
         *
         * @return array 
         * @static 
         */
        public static function toArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::toArray();
        }
        
        /**
         * Convert the model's attributes to an array.
         *
         * @return array 
         * @static 
         */
        public static function attributesToArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::attributesToArray();
        }
        
        /**
         * Get the model's relationships in array form.
         *
         * @return array 
         * @static 
         */
        public static function relationsToArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::relationsToArray();
        }
        
        /**
         * Get an attribute from the model.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getAttribute($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getAttribute($key);
        }
        
        /**
         * Get a plain attribute (not a relationship).
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getAttributeValue($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getAttributeValue($key);
        }
        
        /**
         * Get a relationship.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getRelationValue($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getRelationValue($key);
        }
        
        /**
         * Determine if a get mutator exists for an attribute.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasGetMutator($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::hasGetMutator($key);
        }
        
        /**
         * Determine whether an attribute should be cast to a native type.
         *
         * @param string $key
         * @param array|string|null $types
         * @return bool 
         * @static 
         */
        public static function hasCast($key, $types = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::hasCast($key, $types);
        }
        
        /**
         * Get the casts array.
         *
         * @return array 
         * @static 
         */
        public static function getCasts(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getCasts();
        }
        
        /**
         * Set a given attribute on the model.
         *
         * @param string $key
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setAttribute($key, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setAttribute($key, $value);
        }
        
        /**
         * Determine if a set mutator exists for an attribute.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasSetMutator($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::hasSetMutator($key);
        }
        
        /**
         * Get the attributes that should be converted to dates.
         *
         * @return array 
         * @static 
         */
        public static function getDates(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getDates();
        }
        
        /**
         * Convert a DateTime to a storable string.
         *
         * @param \DateTime|int $value
         * @return string 
         * @static 
         */
        public static function fromDateTime($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::fromDateTime($value);
        }
        
        /**
         * Set the date format used by the model.
         *
         * @param string $format
         * @return $this 
         * @static 
         */
        public static function setDateFormat($format){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setDateFormat($format);
        }
        
        /**
         * Decode the given JSON back into an array or object.
         *
         * @param string $value
         * @param bool $asObject
         * @return mixed 
         * @static 
         */
        public static function fromJson($value, $asObject = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::fromJson($value, $asObject);
        }
        
        /**
         * Clone the model into a new, non-existing instance.
         *
         * @param array|null $except
         * @return \Illuminate\Database\Eloquent\Model 
         * @static 
         */
        public static function replicate($except = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::replicate($except);
        }
        
        /**
         * Get all of the current attributes on the model.
         *
         * @return array 
         * @static 
         */
        public static function getAttributes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getAttributes();
        }
        
        /**
         * Set the array of model attributes. No checking is done.
         *
         * @param array $attributes
         * @param bool $sync
         * @return $this 
         * @static 
         */
        public static function setRawAttributes($attributes, $sync = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setRawAttributes($attributes, $sync);
        }
        
        /**
         * Get the model's original attribute values.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed|array 
         * @static 
         */
        public static function getOriginal($key = null, $default = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getOriginal($key, $default);
        }
        
        /**
         * Sync the original attributes with the current.
         *
         * @return $this 
         * @static 
         */
        public static function syncOriginal(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::syncOriginal();
        }
        
        /**
         * Sync a single original attribute with its current value.
         *
         * @param string $attribute
         * @return $this 
         * @static 
         */
        public static function syncOriginalAttribute($attribute){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::syncOriginalAttribute($attribute);
        }
        
        /**
         * Determine if the model or given attribute(s) have been modified.
         *
         * @param array|string|null $attributes
         * @return bool 
         * @static 
         */
        public static function isDirty($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::isDirty($attributes);
        }
        
        /**
         * Get the attributes that have been changed since last sync.
         *
         * @return array 
         * @static 
         */
        public static function getDirty(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getDirty();
        }
        
        /**
         * Get all the loaded relations for the instance.
         *
         * @return array 
         * @static 
         */
        public static function getRelations(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getRelations();
        }
        
        /**
         * Get a specified relationship.
         *
         * @param string $relation
         * @return mixed 
         * @static 
         */
        public static function getRelation($relation){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getRelation($relation);
        }
        
        /**
         * Determine if the given relation is loaded.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function relationLoaded($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::relationLoaded($key);
        }
        
        /**
         * Set the specific relationship in the model.
         *
         * @param string $relation
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setRelation($relation, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setRelation($relation, $value);
        }
        
        /**
         * Set the entire relations array on the model.
         *
         * @param array $relations
         * @return $this 
         * @static 
         */
        public static function setRelations($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setRelations($relations);
        }
        
        /**
         * Get the database connection for the model.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function getConnection(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getConnection();
        }
        
        /**
         * Get the current connection name for the model.
         *
         * @return string 
         * @static 
         */
        public static function getConnectionName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getConnectionName();
        }
        
        /**
         * Set the connection associated with the model.
         *
         * @param string $name
         * @return $this 
         * @static 
         */
        public static function setConnection($name){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::setConnection($name);
        }
        
        /**
         * Resolve a connection instance.
         *
         * @param string|null $connection
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function resolveConnection($connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::resolveConnection($connection);
        }
        
        /**
         * Get the connection resolver instance.
         *
         * @return \Illuminate\Database\ConnectionResolverInterface 
         * @static 
         */
        public static function getConnectionResolver(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getConnectionResolver();
        }
        
        /**
         * Set the connection resolver instance.
         *
         * @param \Illuminate\Database\ConnectionResolverInterface $resolver
         * @return void 
         * @static 
         */
        public static function setConnectionResolver($resolver){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::setConnectionResolver($resolver);
        }
        
        /**
         * Unset the connection resolver for models.
         *
         * @return void 
         * @static 
         */
        public static function unsetConnectionResolver(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::unsetConnectionResolver();
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */
        public static function getEventDispatcher(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
         * @return void 
         * @static 
         */
        public static function setEventDispatcher($dispatcher){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::setEventDispatcher($dispatcher);
        }
        
        /**
         * Unset the event dispatcher for models.
         *
         * @return void 
         * @static 
         */
        public static function unsetEventDispatcher(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::unsetEventDispatcher();
        }
        
        /**
         * Get the mutated attributes for a given instance.
         *
         * @return array 
         * @static 
         */
        public static function getMutatedAttributes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::getMutatedAttributes();
        }
        
        /**
         * Extract and cache all the mutated attributes of a class.
         *
         * @param string $class
         * @return void 
         * @static 
         */
        public static function cacheMutatedAttributes($class){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::cacheMutatedAttributes($class);
        }
        
        /**
         * Determine if the given attribute exists.
         *
         * @param mixed $offset
         * @return bool 
         * @static 
         */
        public static function offsetExists($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::offsetExists($offset);
        }
        
        /**
         * Get the value for a given offset.
         *
         * @param mixed $offset
         * @return mixed 
         * @static 
         */
        public static function offsetGet($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitStatus::offsetGet($offset);
        }
        
        /**
         * Set the value for a given offset.
         *
         * @param mixed $offset
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($offset, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::offsetSet($offset, $value);
        }
        
        /**
         * Unset the value for a given offset.
         *
         * @param mixed $offset
         * @return void 
         * @static 
         */
        public static function offsetUnset($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitStatus::offsetUnset($offset);
        }
        
        /**
         * Get tickets of this status
         *
         * @return \Kordy\Ticketit\Models\HasMany 
         * @static 
         */
        public static function tickets(){
            return \Kordy\Ticketit\Models\TicketitStatus::tickets();
        }
        
    }


    class TicketitPriority extends \Kordy\Ticketit\Facades\TicketitPriorityFacade{
        
        /**
         * Clear the list of booted models so they will be re-booted.
         *
         * @return void 
         * @static 
         */
        public static function clearBootedModels(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::clearBootedModels();
        }
        
        /**
         * Register a new global scope on the model.
         *
         * @param \Illuminate\Database\Eloquent\Scope|\Closure|string $scope
         * @param \Closure|null $implementation
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function addGlobalScope($scope, $implementation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::addGlobalScope($scope, $implementation);
        }
        
        /**
         * Determine if a model has a global scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return bool 
         * @static 
         */
        public static function hasGlobalScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::hasGlobalScope($scope);
        }
        
        /**
         * Get a global scope registered with the model.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return \Illuminate\Database\Eloquent\Scope|\Closure|null 
         * @static 
         */
        public static function getGlobalScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getGlobalScope($scope);
        }
        
        /**
         * Get the global scopes for this class instance.
         *
         * @return array 
         * @static 
         */
        public static function getGlobalScopes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getGlobalScopes();
        }
        
        /**
         * Register an observer with the Model.
         *
         * @param object|string $class
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function observe($class, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::observe($class, $priority);
        }
        
        /**
         * Fill the model with an array of attributes.
         *
         * @param array $attributes
         * @return $this 
         * @throws \Illuminate\Database\Eloquent\MassAssignmentException
         * @static 
         */
        public static function fill($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::fill($attributes);
        }
        
        /**
         * Fill the model with an array of attributes. Force mass assignment.
         *
         * @param array $attributes
         * @return $this 
         * @static 
         */
        public static function forceFill($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::forceFill($attributes);
        }
        
        /**
         * Create a new instance of the given model.
         *
         * @param array $attributes
         * @param bool $exists
         * @return static 
         * @static 
         */
        public static function newInstance($attributes = array(), $exists = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::newInstance($attributes, $exists);
        }
        
        /**
         * Create a new model instance that is existing.
         *
         * @param array $attributes
         * @param string|null $connection
         * @return static 
         * @static 
         */
        public static function newFromBuilder($attributes = array(), $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::newFromBuilder($attributes, $connection);
        }
        
        /**
         * Create a collection of models from plain arrays.
         *
         * @param array $items
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function hydrate($items, $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::hydrate($items, $connection);
        }
        
        /**
         * Create a collection of models from a raw query.
         *
         * @param string $query
         * @param array $bindings
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function hydrateRaw($query, $bindings = array(), $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::hydrateRaw($query, $bindings, $connection);
        }
        
        /**
         * Save a new model and return the instance.
         *
         * @param array $attributes
         * @return static 
         * @static 
         */
        public static function create($attributes = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::create($attributes);
        }
        
        /**
         * Save a new model and return the instance. Allow mass-assignment.
         *
         * @param array $attributes
         * @return static 
         * @static 
         */
        public static function forceCreate($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::forceCreate($attributes);
        }
        
        /**
         * Begin querying the model.
         *
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function query(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::query();
        }
        
        /**
         * Begin querying the model on a given connection.
         *
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function on($connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::on($connection);
        }
        
        /**
         * Begin querying the model on the write connection.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function onWriteConnection(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::onWriteConnection();
        }
        
        /**
         * Get all of the models from the database.
         *
         * @param array|mixed $columns
         * @return \Illuminate\Database\Eloquent\Collection|static[] 
         * @static 
         */
        public static function all($columns = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::all($columns);
        }
        
        /**
         * Reload a fresh model instance from the database.
         *
         * @param array|string $with
         * @return $this|null 
         * @static 
         */
        public static function fresh($with = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::fresh($with);
        }
        
        /**
         * Eager load relations on the model.
         *
         * @param array|string $relations
         * @return $this 
         * @static 
         */
        public static function load($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::load($relations);
        }
        
        /**
         * Begin querying a model with eager loading.
         *
         * @param array|string $relations
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function with($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::with($relations);
        }
        
        /**
         * Append attributes to query when building a query.
         *
         * @param array|string $attributes
         * @return $this 
         * @static 
         */
        public static function append($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::append($attributes);
        }
        
        /**
         * Define a one-to-one relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasOne 
         * @static 
         */
        public static function hasOne($related, $foreignKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::hasOne($related, $foreignKey, $localKey);
        }
        
        /**
         * Define a polymorphic one-to-one relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $type
         * @param string $id
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphOne 
         * @static 
         */
        public static function morphOne($related, $name, $type = null, $id = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::morphOne($related, $name, $type, $id, $localKey);
        }
        
        /**
         * Define an inverse one-to-one or many relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $otherKey
         * @param string $relation
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo 
         * @static 
         */
        public static function belongsTo($related, $foreignKey = null, $otherKey = null, $relation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::belongsTo($related, $foreignKey, $otherKey, $relation);
        }
        
        /**
         * Define a polymorphic, inverse one-to-one or many relationship.
         *
         * @param string $name
         * @param string $type
         * @param string $id
         * @return \Illuminate\Database\Eloquent\Relations\MorphTo 
         * @static 
         */
        public static function morphTo($name = null, $type = null, $id = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::morphTo($name, $type, $id);
        }
        
        /**
         * Retrieve the fully qualified class name from a slug.
         *
         * @param string $class
         * @return string 
         * @static 
         */
        public static function getActualClassNameForMorph($class){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getActualClassNameForMorph($class);
        }
        
        /**
         * Define a one-to-many relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasMany 
         * @static 
         */
        public static function hasMany($related, $foreignKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::hasMany($related, $foreignKey, $localKey);
        }
        
        /**
         * Define a has-many-through relationship.
         *
         * @param string $related
         * @param string $through
         * @param string|null $firstKey
         * @param string|null $secondKey
         * @param string|null $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough 
         * @static 
         */
        public static function hasManyThrough($related, $through, $firstKey = null, $secondKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::hasManyThrough($related, $through, $firstKey, $secondKey, $localKey);
        }
        
        /**
         * Define a polymorphic one-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $type
         * @param string $id
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphMany 
         * @static 
         */
        public static function morphMany($related, $name, $type = null, $id = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::morphMany($related, $name, $type, $id, $localKey);
        }
        
        /**
         * Define a many-to-many relationship.
         *
         * @param string $related
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @param string $relation
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany 
         * @static 
         */
        public static function belongsToMany($related, $table = null, $foreignKey = null, $otherKey = null, $relation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::belongsToMany($related, $table, $foreignKey, $otherKey, $relation);
        }
        
        /**
         * Define a polymorphic many-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @param bool $inverse
         * @return \Illuminate\Database\Eloquent\Relations\MorphToMany 
         * @static 
         */
        public static function morphToMany($related, $name, $table = null, $foreignKey = null, $otherKey = null, $inverse = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::morphToMany($related, $name, $table, $foreignKey, $otherKey, $inverse);
        }
        
        /**
         * Define a polymorphic, inverse many-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphToMany 
         * @static 
         */
        public static function morphedByMany($related, $name, $table = null, $foreignKey = null, $otherKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::morphedByMany($related, $name, $table, $foreignKey, $otherKey);
        }
        
        /**
         * Get the joining table name for a many-to-many relation.
         *
         * @param string $related
         * @return string 
         * @static 
         */
        public static function joiningTable($related){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::joiningTable($related);
        }
        
        /**
         * Destroy the models for the given IDs.
         *
         * @param array|int $ids
         * @return int 
         * @static 
         */
        public static function destroy($ids){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::destroy($ids);
        }
        
        /**
         * Delete the model from the database.
         *
         * @return bool|null 
         * @throws \Exception
         * @static 
         */
        public static function delete(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::delete();
        }
        
        /**
         * Force a hard delete on a soft deleted model.
         * 
         * This method protects developers from running forceDelete when trait is missing.
         *
         * @return bool|null 
         * @static 
         */
        public static function forceDelete(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::forceDelete();
        }
        
        /**
         * Register a saving model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function saving($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::saving($callback, $priority);
        }
        
        /**
         * Register a saved model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function saved($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::saved($callback, $priority);
        }
        
        /**
         * Register an updating model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function updating($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::updating($callback, $priority);
        }
        
        /**
         * Register an updated model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function updated($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::updated($callback, $priority);
        }
        
        /**
         * Register a creating model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function creating($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::creating($callback, $priority);
        }
        
        /**
         * Register a created model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function created($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::created($callback, $priority);
        }
        
        /**
         * Register a deleting model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function deleting($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::deleting($callback, $priority);
        }
        
        /**
         * Register a deleted model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function deleted($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::deleted($callback, $priority);
        }
        
        /**
         * Remove all of the event listeners for the model.
         *
         * @return void 
         * @static 
         */
        public static function flushEventListeners(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::flushEventListeners();
        }
        
        /**
         * Get the observable event names.
         *
         * @return array 
         * @static 
         */
        public static function getObservableEvents(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getObservableEvents();
        }
        
        /**
         * Set the observable event names.
         *
         * @param array $observables
         * @return $this 
         * @static 
         */
        public static function setObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setObservableEvents($observables);
        }
        
        /**
         * Add an observable event name.
         *
         * @param array|mixed $observables
         * @return void 
         * @static 
         */
        public static function addObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::addObservableEvents($observables);
        }
        
        /**
         * Remove an observable event name.
         *
         * @param array|mixed $observables
         * @return void 
         * @static 
         */
        public static function removeObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::removeObservableEvents($observables);
        }
        
        /**
         * Update the model in the database.
         *
         * @param array $attributes
         * @param array $options
         * @return bool|int 
         * @static 
         */
        public static function update($attributes = array(), $options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::update($attributes, $options);
        }
        
        /**
         * Save the model and all of its relationships.
         *
         * @return bool 
         * @static 
         */
        public static function push(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::push();
        }
        
        /**
         * Save the model to the database.
         *
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function save($options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::save($options);
        }
        
        /**
         * Save the model to the database using transaction.
         *
         * @param array $options
         * @return bool 
         * @throws \Throwable
         * @static 
         */
        public static function saveOrFail($options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::saveOrFail($options);
        }
        
        /**
         * Touch the owning relations of the model.
         *
         * @return void 
         * @static 
         */
        public static function touchOwners(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::touchOwners();
        }
        
        /**
         * Determine if the model touches a given relation.
         *
         * @param string $relation
         * @return bool 
         * @static 
         */
        public static function touches($relation){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::touches($relation);
        }
        
        /**
         * Update the model's update timestamp.
         *
         * @return bool 
         * @static 
         */
        public static function touch(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::touch();
        }
        
        /**
         * Set the value of the "created at" attribute.
         *
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setCreatedAt($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setCreatedAt($value);
        }
        
        /**
         * Set the value of the "updated at" attribute.
         *
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setUpdatedAt($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setUpdatedAt($value);
        }
        
        /**
         * Get the name of the "created at" column.
         *
         * @return string 
         * @static 
         */
        public static function getCreatedAtColumn(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getCreatedAtColumn();
        }
        
        /**
         * Get the name of the "updated at" column.
         *
         * @return string 
         * @static 
         */
        public static function getUpdatedAtColumn(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getUpdatedAtColumn();
        }
        
        /**
         * Get a fresh timestamp for the model.
         *
         * @return \Carbon\Carbon 
         * @static 
         */
        public static function freshTimestamp(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::freshTimestamp();
        }
        
        /**
         * Get a fresh timestamp for the model.
         *
         * @return string 
         * @static 
         */
        public static function freshTimestampString(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::freshTimestampString();
        }
        
        /**
         * Get a new query builder for the model's table.
         *
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function newQuery(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::newQuery();
        }
        
        /**
         * Get a new query instance without a given scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function newQueryWithoutScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::newQueryWithoutScope($scope);
        }
        
        /**
         * Get a new query builder that doesn't have any global scopes.
         *
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function newQueryWithoutScopes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::newQueryWithoutScopes();
        }
        
        /**
         * Create a new Eloquent query builder for the model.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function newEloquentBuilder($query){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::newEloquentBuilder($query);
        }
        
        /**
         * Create a new Eloquent Collection instance.
         *
         * @param array $models
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function newCollection($models = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::newCollection($models);
        }
        
        /**
         * Create a new pivot model instance.
         *
         * @param \Illuminate\Database\Eloquent\Model $parent
         * @param array $attributes
         * @param string $table
         * @param bool $exists
         * @return \Illuminate\Database\Eloquent\Relations\Pivot 
         * @static 
         */
        public static function newPivot($parent, $attributes, $table, $exists){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::newPivot($parent, $attributes, $table, $exists);
        }
        
        /**
         * Get the table associated with the model.
         *
         * @return string 
         * @static 
         */
        public static function getTable(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getTable();
        }
        
        /**
         * Set the table associated with the model.
         *
         * @param string $table
         * @return $this 
         * @static 
         */
        public static function setTable($table){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setTable($table);
        }
        
        /**
         * Get the value of the model's primary key.
         *
         * @return mixed 
         * @static 
         */
        public static function getKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getKey();
        }
        
        /**
         * Get the queueable identity for the entity.
         *
         * @return mixed 
         * @static 
         */
        public static function getQueueableId(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getQueueableId();
        }
        
        /**
         * Get the primary key for the model.
         *
         * @return string 
         * @static 
         */
        public static function getKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getKeyName();
        }
        
        /**
         * Set the primary key for the model.
         *
         * @param string $key
         * @return $this 
         * @static 
         */
        public static function setKeyName($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setKeyName($key);
        }
        
        /**
         * Get the table qualified key name.
         *
         * @return string 
         * @static 
         */
        public static function getQualifiedKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getQualifiedKeyName();
        }
        
        /**
         * Get the value of the model's route key.
         *
         * @return mixed 
         * @static 
         */
        public static function getRouteKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getRouteKey();
        }
        
        /**
         * Get the route key for the model.
         *
         * @return string 
         * @static 
         */
        public static function getRouteKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getRouteKeyName();
        }
        
        /**
         * Determine if the model uses timestamps.
         *
         * @return bool 
         * @static 
         */
        public static function usesTimestamps(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::usesTimestamps();
        }
        
        /**
         * Get the class name for polymorphic relations.
         *
         * @return string 
         * @static 
         */
        public static function getMorphClass(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getMorphClass();
        }
        
        /**
         * Get the number of models to return per page.
         *
         * @return int 
         * @static 
         */
        public static function getPerPage(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getPerPage();
        }
        
        /**
         * Set the number of models to return per page.
         *
         * @param int $perPage
         * @return $this 
         * @static 
         */
        public static function setPerPage($perPage){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setPerPage($perPage);
        }
        
        /**
         * Get the default foreign key name for the model.
         *
         * @return string 
         * @static 
         */
        public static function getForeignKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getForeignKey();
        }
        
        /**
         * Get the hidden attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getHidden(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getHidden();
        }
        
        /**
         * Set the hidden attributes for the model.
         *
         * @param array $hidden
         * @return $this 
         * @static 
         */
        public static function setHidden($hidden){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setHidden($hidden);
        }
        
        /**
         * Add hidden attributes for the model.
         *
         * @param array|string|null $attributes
         * @return void 
         * @static 
         */
        public static function addHidden($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::addHidden($attributes);
        }
        
        /**
         * Make the given, typically hidden, attributes visible.
         *
         * @param array|string $attributes
         * @return $this 
         * @static 
         */
        public static function makeVisible($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::makeVisible($attributes);
        }
        
        /**
         * Make the given, typically hidden, attributes visible.
         *
         * @param array|string $attributes
         * @return $this 
         * @deprecated since version 5.2. Use the "makeVisible" method directly.
         * @static 
         */
        public static function withHidden($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::withHidden($attributes);
        }
        
        /**
         * Get the visible attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getVisible(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getVisible();
        }
        
        /**
         * Set the visible attributes for the model.
         *
         * @param array $visible
         * @return $this 
         * @static 
         */
        public static function setVisible($visible){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setVisible($visible);
        }
        
        /**
         * Add visible attributes for the model.
         *
         * @param array|string|null $attributes
         * @return void 
         * @static 
         */
        public static function addVisible($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::addVisible($attributes);
        }
        
        /**
         * Set the accessors to append to model arrays.
         *
         * @param array $appends
         * @return $this 
         * @static 
         */
        public static function setAppends($appends){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setAppends($appends);
        }
        
        /**
         * Get the fillable attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getFillable(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getFillable();
        }
        
        /**
         * Set the fillable attributes for the model.
         *
         * @param array $fillable
         * @return $this 
         * @static 
         */
        public static function fillable($fillable){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::fillable($fillable);
        }
        
        /**
         * Get the guarded attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getGuarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getGuarded();
        }
        
        /**
         * Set the guarded attributes for the model.
         *
         * @param array $guarded
         * @return $this 
         * @static 
         */
        public static function guard($guarded){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::guard($guarded);
        }
        
        /**
         * Disable all mass assignable restrictions.
         *
         * @param bool $state
         * @return void 
         * @static 
         */
        public static function unguard($state = true){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::unguard($state);
        }
        
        /**
         * Enable the mass assignment restrictions.
         *
         * @return void 
         * @static 
         */
        public static function reguard(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::reguard();
        }
        
        /**
         * Determine if current state is "unguarded".
         *
         * @return bool 
         * @static 
         */
        public static function isUnguarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::isUnguarded();
        }
        
        /**
         * Run the given callable while being unguarded.
         *
         * @param callable $callback
         * @return mixed 
         * @static 
         */
        public static function unguarded($callback){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::unguarded($callback);
        }
        
        /**
         * Determine if the given attribute may be mass assigned.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function isFillable($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::isFillable($key);
        }
        
        /**
         * Determine if the given key is guarded.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function isGuarded($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::isGuarded($key);
        }
        
        /**
         * Determine if the model is totally guarded.
         *
         * @return bool 
         * @static 
         */
        public static function totallyGuarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::totallyGuarded();
        }
        
        /**
         * Get the relationships that are touched on save.
         *
         * @return array 
         * @static 
         */
        public static function getTouchedRelations(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getTouchedRelations();
        }
        
        /**
         * Set the relationships that are touched on save.
         *
         * @param array $touches
         * @return $this 
         * @static 
         */
        public static function setTouchedRelations($touches){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setTouchedRelations($touches);
        }
        
        /**
         * Get the value indicating whether the IDs are incrementing.
         *
         * @return bool 
         * @static 
         */
        public static function getIncrementing(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getIncrementing();
        }
        
        /**
         * Set whether IDs are incrementing.
         *
         * @param bool $value
         * @return $this 
         * @static 
         */
        public static function setIncrementing($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setIncrementing($value);
        }
        
        /**
         * Convert the model instance to JSON.
         *
         * @param int $options
         * @return string 
         * @static 
         */
        public static function toJson($options = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::toJson($options);
        }
        
        /**
         * Convert the object into something JSON serializable.
         *
         * @return array 
         * @static 
         */
        public static function jsonSerialize(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::jsonSerialize();
        }
        
        /**
         * Convert the model instance to an array.
         *
         * @return array 
         * @static 
         */
        public static function toArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::toArray();
        }
        
        /**
         * Convert the model's attributes to an array.
         *
         * @return array 
         * @static 
         */
        public static function attributesToArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::attributesToArray();
        }
        
        /**
         * Get the model's relationships in array form.
         *
         * @return array 
         * @static 
         */
        public static function relationsToArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::relationsToArray();
        }
        
        /**
         * Get an attribute from the model.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getAttribute($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getAttribute($key);
        }
        
        /**
         * Get a plain attribute (not a relationship).
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getAttributeValue($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getAttributeValue($key);
        }
        
        /**
         * Get a relationship.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getRelationValue($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getRelationValue($key);
        }
        
        /**
         * Determine if a get mutator exists for an attribute.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasGetMutator($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::hasGetMutator($key);
        }
        
        /**
         * Determine whether an attribute should be cast to a native type.
         *
         * @param string $key
         * @param array|string|null $types
         * @return bool 
         * @static 
         */
        public static function hasCast($key, $types = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::hasCast($key, $types);
        }
        
        /**
         * Get the casts array.
         *
         * @return array 
         * @static 
         */
        public static function getCasts(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getCasts();
        }
        
        /**
         * Set a given attribute on the model.
         *
         * @param string $key
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setAttribute($key, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setAttribute($key, $value);
        }
        
        /**
         * Determine if a set mutator exists for an attribute.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasSetMutator($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::hasSetMutator($key);
        }
        
        /**
         * Get the attributes that should be converted to dates.
         *
         * @return array 
         * @static 
         */
        public static function getDates(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getDates();
        }
        
        /**
         * Convert a DateTime to a storable string.
         *
         * @param \DateTime|int $value
         * @return string 
         * @static 
         */
        public static function fromDateTime($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::fromDateTime($value);
        }
        
        /**
         * Set the date format used by the model.
         *
         * @param string $format
         * @return $this 
         * @static 
         */
        public static function setDateFormat($format){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setDateFormat($format);
        }
        
        /**
         * Decode the given JSON back into an array or object.
         *
         * @param string $value
         * @param bool $asObject
         * @return mixed 
         * @static 
         */
        public static function fromJson($value, $asObject = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::fromJson($value, $asObject);
        }
        
        /**
         * Clone the model into a new, non-existing instance.
         *
         * @param array|null $except
         * @return \Illuminate\Database\Eloquent\Model 
         * @static 
         */
        public static function replicate($except = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::replicate($except);
        }
        
        /**
         * Get all of the current attributes on the model.
         *
         * @return array 
         * @static 
         */
        public static function getAttributes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getAttributes();
        }
        
        /**
         * Set the array of model attributes. No checking is done.
         *
         * @param array $attributes
         * @param bool $sync
         * @return $this 
         * @static 
         */
        public static function setRawAttributes($attributes, $sync = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setRawAttributes($attributes, $sync);
        }
        
        /**
         * Get the model's original attribute values.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed|array 
         * @static 
         */
        public static function getOriginal($key = null, $default = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getOriginal($key, $default);
        }
        
        /**
         * Sync the original attributes with the current.
         *
         * @return $this 
         * @static 
         */
        public static function syncOriginal(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::syncOriginal();
        }
        
        /**
         * Sync a single original attribute with its current value.
         *
         * @param string $attribute
         * @return $this 
         * @static 
         */
        public static function syncOriginalAttribute($attribute){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::syncOriginalAttribute($attribute);
        }
        
        /**
         * Determine if the model or given attribute(s) have been modified.
         *
         * @param array|string|null $attributes
         * @return bool 
         * @static 
         */
        public static function isDirty($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::isDirty($attributes);
        }
        
        /**
         * Get the attributes that have been changed since last sync.
         *
         * @return array 
         * @static 
         */
        public static function getDirty(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getDirty();
        }
        
        /**
         * Get all the loaded relations for the instance.
         *
         * @return array 
         * @static 
         */
        public static function getRelations(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getRelations();
        }
        
        /**
         * Get a specified relationship.
         *
         * @param string $relation
         * @return mixed 
         * @static 
         */
        public static function getRelation($relation){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getRelation($relation);
        }
        
        /**
         * Determine if the given relation is loaded.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function relationLoaded($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::relationLoaded($key);
        }
        
        /**
         * Set the specific relationship in the model.
         *
         * @param string $relation
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setRelation($relation, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setRelation($relation, $value);
        }
        
        /**
         * Set the entire relations array on the model.
         *
         * @param array $relations
         * @return $this 
         * @static 
         */
        public static function setRelations($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setRelations($relations);
        }
        
        /**
         * Get the database connection for the model.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function getConnection(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getConnection();
        }
        
        /**
         * Get the current connection name for the model.
         *
         * @return string 
         * @static 
         */
        public static function getConnectionName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getConnectionName();
        }
        
        /**
         * Set the connection associated with the model.
         *
         * @param string $name
         * @return $this 
         * @static 
         */
        public static function setConnection($name){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::setConnection($name);
        }
        
        /**
         * Resolve a connection instance.
         *
         * @param string|null $connection
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function resolveConnection($connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::resolveConnection($connection);
        }
        
        /**
         * Get the connection resolver instance.
         *
         * @return \Illuminate\Database\ConnectionResolverInterface 
         * @static 
         */
        public static function getConnectionResolver(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getConnectionResolver();
        }
        
        /**
         * Set the connection resolver instance.
         *
         * @param \Illuminate\Database\ConnectionResolverInterface $resolver
         * @return void 
         * @static 
         */
        public static function setConnectionResolver($resolver){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::setConnectionResolver($resolver);
        }
        
        /**
         * Unset the connection resolver for models.
         *
         * @return void 
         * @static 
         */
        public static function unsetConnectionResolver(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::unsetConnectionResolver();
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */
        public static function getEventDispatcher(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
         * @return void 
         * @static 
         */
        public static function setEventDispatcher($dispatcher){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::setEventDispatcher($dispatcher);
        }
        
        /**
         * Unset the event dispatcher for models.
         *
         * @return void 
         * @static 
         */
        public static function unsetEventDispatcher(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::unsetEventDispatcher();
        }
        
        /**
         * Get the mutated attributes for a given instance.
         *
         * @return array 
         * @static 
         */
        public static function getMutatedAttributes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::getMutatedAttributes();
        }
        
        /**
         * Extract and cache all the mutated attributes of a class.
         *
         * @param string $class
         * @return void 
         * @static 
         */
        public static function cacheMutatedAttributes($class){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::cacheMutatedAttributes($class);
        }
        
        /**
         * Determine if the given attribute exists.
         *
         * @param mixed $offset
         * @return bool 
         * @static 
         */
        public static function offsetExists($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::offsetExists($offset);
        }
        
        /**
         * Get the value for a given offset.
         *
         * @param mixed $offset
         * @return mixed 
         * @static 
         */
        public static function offsetGet($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitPriority::offsetGet($offset);
        }
        
        /**
         * Set the value for a given offset.
         *
         * @param mixed $offset
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($offset, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::offsetSet($offset, $value);
        }
        
        /**
         * Unset the value for a given offset.
         *
         * @param mixed $offset
         * @return void 
         * @static 
         */
        public static function offsetUnset($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitPriority::offsetUnset($offset);
        }
        
        /**
         * Get tickets of this priority
         *
         * @return \Kordy\Ticketit\Models\HasMany 
         * @static 
         */
        public static function tickets(){
            return \Kordy\Ticketit\Models\TicketitPriority::tickets();
        }
        
    }


    class TicketitCategory extends \Kordy\Ticketit\Facades\TicketitCategoryFacade{
        
        /**
         * Clear the list of booted models so they will be re-booted.
         *
         * @return void 
         * @static 
         */
        public static function clearBootedModels(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::clearBootedModels();
        }
        
        /**
         * Register a new global scope on the model.
         *
         * @param \Illuminate\Database\Eloquent\Scope|\Closure|string $scope
         * @param \Closure|null $implementation
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function addGlobalScope($scope, $implementation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::addGlobalScope($scope, $implementation);
        }
        
        /**
         * Determine if a model has a global scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return bool 
         * @static 
         */
        public static function hasGlobalScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::hasGlobalScope($scope);
        }
        
        /**
         * Get a global scope registered with the model.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return \Illuminate\Database\Eloquent\Scope|\Closure|null 
         * @static 
         */
        public static function getGlobalScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getGlobalScope($scope);
        }
        
        /**
         * Get the global scopes for this class instance.
         *
         * @return array 
         * @static 
         */
        public static function getGlobalScopes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getGlobalScopes();
        }
        
        /**
         * Register an observer with the Model.
         *
         * @param object|string $class
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function observe($class, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::observe($class, $priority);
        }
        
        /**
         * Fill the model with an array of attributes.
         *
         * @param array $attributes
         * @return $this 
         * @throws \Illuminate\Database\Eloquent\MassAssignmentException
         * @static 
         */
        public static function fill($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::fill($attributes);
        }
        
        /**
         * Fill the model with an array of attributes. Force mass assignment.
         *
         * @param array $attributes
         * @return $this 
         * @static 
         */
        public static function forceFill($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::forceFill($attributes);
        }
        
        /**
         * Create a new instance of the given model.
         *
         * @param array $attributes
         * @param bool $exists
         * @return static 
         * @static 
         */
        public static function newInstance($attributes = array(), $exists = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::newInstance($attributes, $exists);
        }
        
        /**
         * Create a new model instance that is existing.
         *
         * @param array $attributes
         * @param string|null $connection
         * @return static 
         * @static 
         */
        public static function newFromBuilder($attributes = array(), $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::newFromBuilder($attributes, $connection);
        }
        
        /**
         * Create a collection of models from plain arrays.
         *
         * @param array $items
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function hydrate($items, $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::hydrate($items, $connection);
        }
        
        /**
         * Create a collection of models from a raw query.
         *
         * @param string $query
         * @param array $bindings
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function hydrateRaw($query, $bindings = array(), $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::hydrateRaw($query, $bindings, $connection);
        }
        
        /**
         * Save a new model and return the instance.
         *
         * @param array $attributes
         * @return static 
         * @static 
         */
        public static function create($attributes = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::create($attributes);
        }
        
        /**
         * Save a new model and return the instance. Allow mass-assignment.
         *
         * @param array $attributes
         * @return static 
         * @static 
         */
        public static function forceCreate($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::forceCreate($attributes);
        }
        
        /**
         * Begin querying the model.
         *
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function query(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::query();
        }
        
        /**
         * Begin querying the model on a given connection.
         *
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function on($connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::on($connection);
        }
        
        /**
         * Begin querying the model on the write connection.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function onWriteConnection(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::onWriteConnection();
        }
        
        /**
         * Get all of the models from the database.
         *
         * @param array|mixed $columns
         * @return \Illuminate\Database\Eloquent\Collection|static[] 
         * @static 
         */
        public static function all($columns = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::all($columns);
        }
        
        /**
         * Reload a fresh model instance from the database.
         *
         * @param array|string $with
         * @return $this|null 
         * @static 
         */
        public static function fresh($with = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::fresh($with);
        }
        
        /**
         * Eager load relations on the model.
         *
         * @param array|string $relations
         * @return $this 
         * @static 
         */
        public static function load($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::load($relations);
        }
        
        /**
         * Begin querying a model with eager loading.
         *
         * @param array|string $relations
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function with($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::with($relations);
        }
        
        /**
         * Append attributes to query when building a query.
         *
         * @param array|string $attributes
         * @return $this 
         * @static 
         */
        public static function append($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::append($attributes);
        }
        
        /**
         * Define a one-to-one relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasOne 
         * @static 
         */
        public static function hasOne($related, $foreignKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::hasOne($related, $foreignKey, $localKey);
        }
        
        /**
         * Define a polymorphic one-to-one relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $type
         * @param string $id
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphOne 
         * @static 
         */
        public static function morphOne($related, $name, $type = null, $id = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::morphOne($related, $name, $type, $id, $localKey);
        }
        
        /**
         * Define an inverse one-to-one or many relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $otherKey
         * @param string $relation
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo 
         * @static 
         */
        public static function belongsTo($related, $foreignKey = null, $otherKey = null, $relation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::belongsTo($related, $foreignKey, $otherKey, $relation);
        }
        
        /**
         * Define a polymorphic, inverse one-to-one or many relationship.
         *
         * @param string $name
         * @param string $type
         * @param string $id
         * @return \Illuminate\Database\Eloquent\Relations\MorphTo 
         * @static 
         */
        public static function morphTo($name = null, $type = null, $id = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::morphTo($name, $type, $id);
        }
        
        /**
         * Retrieve the fully qualified class name from a slug.
         *
         * @param string $class
         * @return string 
         * @static 
         */
        public static function getActualClassNameForMorph($class){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getActualClassNameForMorph($class);
        }
        
        /**
         * Define a one-to-many relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasMany 
         * @static 
         */
        public static function hasMany($related, $foreignKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::hasMany($related, $foreignKey, $localKey);
        }
        
        /**
         * Define a has-many-through relationship.
         *
         * @param string $related
         * @param string $through
         * @param string|null $firstKey
         * @param string|null $secondKey
         * @param string|null $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough 
         * @static 
         */
        public static function hasManyThrough($related, $through, $firstKey = null, $secondKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::hasManyThrough($related, $through, $firstKey, $secondKey, $localKey);
        }
        
        /**
         * Define a polymorphic one-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $type
         * @param string $id
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphMany 
         * @static 
         */
        public static function morphMany($related, $name, $type = null, $id = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::morphMany($related, $name, $type, $id, $localKey);
        }
        
        /**
         * Define a many-to-many relationship.
         *
         * @param string $related
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @param string $relation
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany 
         * @static 
         */
        public static function belongsToMany($related, $table = null, $foreignKey = null, $otherKey = null, $relation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::belongsToMany($related, $table, $foreignKey, $otherKey, $relation);
        }
        
        /**
         * Define a polymorphic many-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @param bool $inverse
         * @return \Illuminate\Database\Eloquent\Relations\MorphToMany 
         * @static 
         */
        public static function morphToMany($related, $name, $table = null, $foreignKey = null, $otherKey = null, $inverse = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::morphToMany($related, $name, $table, $foreignKey, $otherKey, $inverse);
        }
        
        /**
         * Define a polymorphic, inverse many-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphToMany 
         * @static 
         */
        public static function morphedByMany($related, $name, $table = null, $foreignKey = null, $otherKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::morphedByMany($related, $name, $table, $foreignKey, $otherKey);
        }
        
        /**
         * Get the joining table name for a many-to-many relation.
         *
         * @param string $related
         * @return string 
         * @static 
         */
        public static function joiningTable($related){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::joiningTable($related);
        }
        
        /**
         * Destroy the models for the given IDs.
         *
         * @param array|int $ids
         * @return int 
         * @static 
         */
        public static function destroy($ids){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::destroy($ids);
        }
        
        /**
         * Delete the model from the database.
         *
         * @return bool|null 
         * @throws \Exception
         * @static 
         */
        public static function delete(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::delete();
        }
        
        /**
         * Force a hard delete on a soft deleted model.
         * 
         * This method protects developers from running forceDelete when trait is missing.
         *
         * @return bool|null 
         * @static 
         */
        public static function forceDelete(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::forceDelete();
        }
        
        /**
         * Register a saving model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function saving($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::saving($callback, $priority);
        }
        
        /**
         * Register a saved model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function saved($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::saved($callback, $priority);
        }
        
        /**
         * Register an updating model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function updating($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::updating($callback, $priority);
        }
        
        /**
         * Register an updated model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function updated($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::updated($callback, $priority);
        }
        
        /**
         * Register a creating model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function creating($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::creating($callback, $priority);
        }
        
        /**
         * Register a created model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function created($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::created($callback, $priority);
        }
        
        /**
         * Register a deleting model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function deleting($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::deleting($callback, $priority);
        }
        
        /**
         * Register a deleted model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function deleted($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::deleted($callback, $priority);
        }
        
        /**
         * Remove all of the event listeners for the model.
         *
         * @return void 
         * @static 
         */
        public static function flushEventListeners(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::flushEventListeners();
        }
        
        /**
         * Get the observable event names.
         *
         * @return array 
         * @static 
         */
        public static function getObservableEvents(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getObservableEvents();
        }
        
        /**
         * Set the observable event names.
         *
         * @param array $observables
         * @return $this 
         * @static 
         */
        public static function setObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setObservableEvents($observables);
        }
        
        /**
         * Add an observable event name.
         *
         * @param array|mixed $observables
         * @return void 
         * @static 
         */
        public static function addObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::addObservableEvents($observables);
        }
        
        /**
         * Remove an observable event name.
         *
         * @param array|mixed $observables
         * @return void 
         * @static 
         */
        public static function removeObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::removeObservableEvents($observables);
        }
        
        /**
         * Update the model in the database.
         *
         * @param array $attributes
         * @param array $options
         * @return bool|int 
         * @static 
         */
        public static function update($attributes = array(), $options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::update($attributes, $options);
        }
        
        /**
         * Save the model and all of its relationships.
         *
         * @return bool 
         * @static 
         */
        public static function push(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::push();
        }
        
        /**
         * Save the model to the database.
         *
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function save($options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::save($options);
        }
        
        /**
         * Save the model to the database using transaction.
         *
         * @param array $options
         * @return bool 
         * @throws \Throwable
         * @static 
         */
        public static function saveOrFail($options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::saveOrFail($options);
        }
        
        /**
         * Touch the owning relations of the model.
         *
         * @return void 
         * @static 
         */
        public static function touchOwners(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::touchOwners();
        }
        
        /**
         * Determine if the model touches a given relation.
         *
         * @param string $relation
         * @return bool 
         * @static 
         */
        public static function touches($relation){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::touches($relation);
        }
        
        /**
         * Update the model's update timestamp.
         *
         * @return bool 
         * @static 
         */
        public static function touch(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::touch();
        }
        
        /**
         * Set the value of the "created at" attribute.
         *
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setCreatedAt($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setCreatedAt($value);
        }
        
        /**
         * Set the value of the "updated at" attribute.
         *
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setUpdatedAt($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setUpdatedAt($value);
        }
        
        /**
         * Get the name of the "created at" column.
         *
         * @return string 
         * @static 
         */
        public static function getCreatedAtColumn(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getCreatedAtColumn();
        }
        
        /**
         * Get the name of the "updated at" column.
         *
         * @return string 
         * @static 
         */
        public static function getUpdatedAtColumn(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getUpdatedAtColumn();
        }
        
        /**
         * Get a fresh timestamp for the model.
         *
         * @return \Carbon\Carbon 
         * @static 
         */
        public static function freshTimestamp(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::freshTimestamp();
        }
        
        /**
         * Get a fresh timestamp for the model.
         *
         * @return string 
         * @static 
         */
        public static function freshTimestampString(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::freshTimestampString();
        }
        
        /**
         * Get a new query builder for the model's table.
         *
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function newQuery(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::newQuery();
        }
        
        /**
         * Get a new query instance without a given scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function newQueryWithoutScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::newQueryWithoutScope($scope);
        }
        
        /**
         * Get a new query builder that doesn't have any global scopes.
         *
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function newQueryWithoutScopes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::newQueryWithoutScopes();
        }
        
        /**
         * Create a new Eloquent query builder for the model.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function newEloquentBuilder($query){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::newEloquentBuilder($query);
        }
        
        /**
         * Create a new Eloquent Collection instance.
         *
         * @param array $models
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function newCollection($models = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::newCollection($models);
        }
        
        /**
         * Create a new pivot model instance.
         *
         * @param \Illuminate\Database\Eloquent\Model $parent
         * @param array $attributes
         * @param string $table
         * @param bool $exists
         * @return \Illuminate\Database\Eloquent\Relations\Pivot 
         * @static 
         */
        public static function newPivot($parent, $attributes, $table, $exists){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::newPivot($parent, $attributes, $table, $exists);
        }
        
        /**
         * Get the table associated with the model.
         *
         * @return string 
         * @static 
         */
        public static function getTable(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getTable();
        }
        
        /**
         * Set the table associated with the model.
         *
         * @param string $table
         * @return $this 
         * @static 
         */
        public static function setTable($table){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setTable($table);
        }
        
        /**
         * Get the value of the model's primary key.
         *
         * @return mixed 
         * @static 
         */
        public static function getKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getKey();
        }
        
        /**
         * Get the queueable identity for the entity.
         *
         * @return mixed 
         * @static 
         */
        public static function getQueueableId(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getQueueableId();
        }
        
        /**
         * Get the primary key for the model.
         *
         * @return string 
         * @static 
         */
        public static function getKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getKeyName();
        }
        
        /**
         * Set the primary key for the model.
         *
         * @param string $key
         * @return $this 
         * @static 
         */
        public static function setKeyName($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setKeyName($key);
        }
        
        /**
         * Get the table qualified key name.
         *
         * @return string 
         * @static 
         */
        public static function getQualifiedKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getQualifiedKeyName();
        }
        
        /**
         * Get the value of the model's route key.
         *
         * @return mixed 
         * @static 
         */
        public static function getRouteKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getRouteKey();
        }
        
        /**
         * Get the route key for the model.
         *
         * @return string 
         * @static 
         */
        public static function getRouteKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getRouteKeyName();
        }
        
        /**
         * Determine if the model uses timestamps.
         *
         * @return bool 
         * @static 
         */
        public static function usesTimestamps(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::usesTimestamps();
        }
        
        /**
         * Get the class name for polymorphic relations.
         *
         * @return string 
         * @static 
         */
        public static function getMorphClass(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getMorphClass();
        }
        
        /**
         * Get the number of models to return per page.
         *
         * @return int 
         * @static 
         */
        public static function getPerPage(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getPerPage();
        }
        
        /**
         * Set the number of models to return per page.
         *
         * @param int $perPage
         * @return $this 
         * @static 
         */
        public static function setPerPage($perPage){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setPerPage($perPage);
        }
        
        /**
         * Get the default foreign key name for the model.
         *
         * @return string 
         * @static 
         */
        public static function getForeignKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getForeignKey();
        }
        
        /**
         * Get the hidden attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getHidden(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getHidden();
        }
        
        /**
         * Set the hidden attributes for the model.
         *
         * @param array $hidden
         * @return $this 
         * @static 
         */
        public static function setHidden($hidden){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setHidden($hidden);
        }
        
        /**
         * Add hidden attributes for the model.
         *
         * @param array|string|null $attributes
         * @return void 
         * @static 
         */
        public static function addHidden($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::addHidden($attributes);
        }
        
        /**
         * Make the given, typically hidden, attributes visible.
         *
         * @param array|string $attributes
         * @return $this 
         * @static 
         */
        public static function makeVisible($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::makeVisible($attributes);
        }
        
        /**
         * Make the given, typically hidden, attributes visible.
         *
         * @param array|string $attributes
         * @return $this 
         * @deprecated since version 5.2. Use the "makeVisible" method directly.
         * @static 
         */
        public static function withHidden($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::withHidden($attributes);
        }
        
        /**
         * Get the visible attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getVisible(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getVisible();
        }
        
        /**
         * Set the visible attributes for the model.
         *
         * @param array $visible
         * @return $this 
         * @static 
         */
        public static function setVisible($visible){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setVisible($visible);
        }
        
        /**
         * Add visible attributes for the model.
         *
         * @param array|string|null $attributes
         * @return void 
         * @static 
         */
        public static function addVisible($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::addVisible($attributes);
        }
        
        /**
         * Set the accessors to append to model arrays.
         *
         * @param array $appends
         * @return $this 
         * @static 
         */
        public static function setAppends($appends){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setAppends($appends);
        }
        
        /**
         * Get the fillable attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getFillable(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getFillable();
        }
        
        /**
         * Set the fillable attributes for the model.
         *
         * @param array $fillable
         * @return $this 
         * @static 
         */
        public static function fillable($fillable){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::fillable($fillable);
        }
        
        /**
         * Get the guarded attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getGuarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getGuarded();
        }
        
        /**
         * Set the guarded attributes for the model.
         *
         * @param array $guarded
         * @return $this 
         * @static 
         */
        public static function guard($guarded){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::guard($guarded);
        }
        
        /**
         * Disable all mass assignable restrictions.
         *
         * @param bool $state
         * @return void 
         * @static 
         */
        public static function unguard($state = true){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::unguard($state);
        }
        
        /**
         * Enable the mass assignment restrictions.
         *
         * @return void 
         * @static 
         */
        public static function reguard(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::reguard();
        }
        
        /**
         * Determine if current state is "unguarded".
         *
         * @return bool 
         * @static 
         */
        public static function isUnguarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::isUnguarded();
        }
        
        /**
         * Run the given callable while being unguarded.
         *
         * @param callable $callback
         * @return mixed 
         * @static 
         */
        public static function unguarded($callback){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::unguarded($callback);
        }
        
        /**
         * Determine if the given attribute may be mass assigned.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function isFillable($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::isFillable($key);
        }
        
        /**
         * Determine if the given key is guarded.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function isGuarded($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::isGuarded($key);
        }
        
        /**
         * Determine if the model is totally guarded.
         *
         * @return bool 
         * @static 
         */
        public static function totallyGuarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::totallyGuarded();
        }
        
        /**
         * Get the relationships that are touched on save.
         *
         * @return array 
         * @static 
         */
        public static function getTouchedRelations(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getTouchedRelations();
        }
        
        /**
         * Set the relationships that are touched on save.
         *
         * @param array $touches
         * @return $this 
         * @static 
         */
        public static function setTouchedRelations($touches){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setTouchedRelations($touches);
        }
        
        /**
         * Get the value indicating whether the IDs are incrementing.
         *
         * @return bool 
         * @static 
         */
        public static function getIncrementing(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getIncrementing();
        }
        
        /**
         * Set whether IDs are incrementing.
         *
         * @param bool $value
         * @return $this 
         * @static 
         */
        public static function setIncrementing($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setIncrementing($value);
        }
        
        /**
         * Convert the model instance to JSON.
         *
         * @param int $options
         * @return string 
         * @static 
         */
        public static function toJson($options = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::toJson($options);
        }
        
        /**
         * Convert the object into something JSON serializable.
         *
         * @return array 
         * @static 
         */
        public static function jsonSerialize(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::jsonSerialize();
        }
        
        /**
         * Convert the model instance to an array.
         *
         * @return array 
         * @static 
         */
        public static function toArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::toArray();
        }
        
        /**
         * Convert the model's attributes to an array.
         *
         * @return array 
         * @static 
         */
        public static function attributesToArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::attributesToArray();
        }
        
        /**
         * Get the model's relationships in array form.
         *
         * @return array 
         * @static 
         */
        public static function relationsToArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::relationsToArray();
        }
        
        /**
         * Get an attribute from the model.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getAttribute($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getAttribute($key);
        }
        
        /**
         * Get a plain attribute (not a relationship).
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getAttributeValue($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getAttributeValue($key);
        }
        
        /**
         * Get a relationship.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getRelationValue($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getRelationValue($key);
        }
        
        /**
         * Determine if a get mutator exists for an attribute.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasGetMutator($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::hasGetMutator($key);
        }
        
        /**
         * Determine whether an attribute should be cast to a native type.
         *
         * @param string $key
         * @param array|string|null $types
         * @return bool 
         * @static 
         */
        public static function hasCast($key, $types = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::hasCast($key, $types);
        }
        
        /**
         * Get the casts array.
         *
         * @return array 
         * @static 
         */
        public static function getCasts(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getCasts();
        }
        
        /**
         * Set a given attribute on the model.
         *
         * @param string $key
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setAttribute($key, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setAttribute($key, $value);
        }
        
        /**
         * Determine if a set mutator exists for an attribute.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasSetMutator($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::hasSetMutator($key);
        }
        
        /**
         * Get the attributes that should be converted to dates.
         *
         * @return array 
         * @static 
         */
        public static function getDates(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getDates();
        }
        
        /**
         * Convert a DateTime to a storable string.
         *
         * @param \DateTime|int $value
         * @return string 
         * @static 
         */
        public static function fromDateTime($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::fromDateTime($value);
        }
        
        /**
         * Set the date format used by the model.
         *
         * @param string $format
         * @return $this 
         * @static 
         */
        public static function setDateFormat($format){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setDateFormat($format);
        }
        
        /**
         * Decode the given JSON back into an array or object.
         *
         * @param string $value
         * @param bool $asObject
         * @return mixed 
         * @static 
         */
        public static function fromJson($value, $asObject = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::fromJson($value, $asObject);
        }
        
        /**
         * Clone the model into a new, non-existing instance.
         *
         * @param array|null $except
         * @return \Illuminate\Database\Eloquent\Model 
         * @static 
         */
        public static function replicate($except = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::replicate($except);
        }
        
        /**
         * Get all of the current attributes on the model.
         *
         * @return array 
         * @static 
         */
        public static function getAttributes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getAttributes();
        }
        
        /**
         * Set the array of model attributes. No checking is done.
         *
         * @param array $attributes
         * @param bool $sync
         * @return $this 
         * @static 
         */
        public static function setRawAttributes($attributes, $sync = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setRawAttributes($attributes, $sync);
        }
        
        /**
         * Get the model's original attribute values.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed|array 
         * @static 
         */
        public static function getOriginal($key = null, $default = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getOriginal($key, $default);
        }
        
        /**
         * Sync the original attributes with the current.
         *
         * @return $this 
         * @static 
         */
        public static function syncOriginal(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::syncOriginal();
        }
        
        /**
         * Sync a single original attribute with its current value.
         *
         * @param string $attribute
         * @return $this 
         * @static 
         */
        public static function syncOriginalAttribute($attribute){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::syncOriginalAttribute($attribute);
        }
        
        /**
         * Determine if the model or given attribute(s) have been modified.
         *
         * @param array|string|null $attributes
         * @return bool 
         * @static 
         */
        public static function isDirty($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::isDirty($attributes);
        }
        
        /**
         * Get the attributes that have been changed since last sync.
         *
         * @return array 
         * @static 
         */
        public static function getDirty(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getDirty();
        }
        
        /**
         * Get all the loaded relations for the instance.
         *
         * @return array 
         * @static 
         */
        public static function getRelations(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getRelations();
        }
        
        /**
         * Get a specified relationship.
         *
         * @param string $relation
         * @return mixed 
         * @static 
         */
        public static function getRelation($relation){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getRelation($relation);
        }
        
        /**
         * Determine if the given relation is loaded.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function relationLoaded($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::relationLoaded($key);
        }
        
        /**
         * Set the specific relationship in the model.
         *
         * @param string $relation
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setRelation($relation, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setRelation($relation, $value);
        }
        
        /**
         * Set the entire relations array on the model.
         *
         * @param array $relations
         * @return $this 
         * @static 
         */
        public static function setRelations($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setRelations($relations);
        }
        
        /**
         * Get the database connection for the model.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function getConnection(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getConnection();
        }
        
        /**
         * Get the current connection name for the model.
         *
         * @return string 
         * @static 
         */
        public static function getConnectionName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getConnectionName();
        }
        
        /**
         * Set the connection associated with the model.
         *
         * @param string $name
         * @return $this 
         * @static 
         */
        public static function setConnection($name){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::setConnection($name);
        }
        
        /**
         * Resolve a connection instance.
         *
         * @param string|null $connection
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function resolveConnection($connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::resolveConnection($connection);
        }
        
        /**
         * Get the connection resolver instance.
         *
         * @return \Illuminate\Database\ConnectionResolverInterface 
         * @static 
         */
        public static function getConnectionResolver(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getConnectionResolver();
        }
        
        /**
         * Set the connection resolver instance.
         *
         * @param \Illuminate\Database\ConnectionResolverInterface $resolver
         * @return void 
         * @static 
         */
        public static function setConnectionResolver($resolver){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::setConnectionResolver($resolver);
        }
        
        /**
         * Unset the connection resolver for models.
         *
         * @return void 
         * @static 
         */
        public static function unsetConnectionResolver(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::unsetConnectionResolver();
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */
        public static function getEventDispatcher(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
         * @return void 
         * @static 
         */
        public static function setEventDispatcher($dispatcher){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::setEventDispatcher($dispatcher);
        }
        
        /**
         * Unset the event dispatcher for models.
         *
         * @return void 
         * @static 
         */
        public static function unsetEventDispatcher(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::unsetEventDispatcher();
        }
        
        /**
         * Get the mutated attributes for a given instance.
         *
         * @return array 
         * @static 
         */
        public static function getMutatedAttributes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::getMutatedAttributes();
        }
        
        /**
         * Extract and cache all the mutated attributes of a class.
         *
         * @param string $class
         * @return void 
         * @static 
         */
        public static function cacheMutatedAttributes($class){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::cacheMutatedAttributes($class);
        }
        
        /**
         * Determine if the given attribute exists.
         *
         * @param mixed $offset
         * @return bool 
         * @static 
         */
        public static function offsetExists($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::offsetExists($offset);
        }
        
        /**
         * Get the value for a given offset.
         *
         * @param mixed $offset
         * @return mixed 
         * @static 
         */
        public static function offsetGet($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitCategory::offsetGet($offset);
        }
        
        /**
         * Set the value for a given offset.
         *
         * @param mixed $offset
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($offset, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::offsetSet($offset, $value);
        }
        
        /**
         * Unset the value for a given offset.
         *
         * @param mixed $offset
         * @return void 
         * @static 
         */
        public static function offsetUnset($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitCategory::offsetUnset($offset);
        }
        
        /**
         * Get all agents belong to this category
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMan 
         * @static 
         */
        public static function agents(){
            return \Kordy\Ticketit\Models\TicketitCategory::agents();
        }
        
        /**
         * Get tickets belongs to this category
         *
         * @return \Kordy\Ticketit\Models\HasMany 
         * @static 
         */
        public static function tickets(){
            return \Kordy\Ticketit\Models\TicketitCategory::tickets();
        }
        
        /**
         * Add an agent or more to this category
         *
         * @param integer|object|array $agent
         * @static 
         */
        public static function addAgent($agent){
            return \Kordy\Ticketit\Models\TicketitCategory::addAgent($agent);
        }
        
        /**
         * remove an agent or more from this category
         *
         * @param integer|object|array $agent
         * @static 
         */
        public static function removeAgent($agent){
            return \Kordy\Ticketit\Models\TicketitCategory::removeAgent($agent);
        }
        
    }


    class TicketitTicket extends \Kordy\Ticketit\Facades\TicketitTicketFacade{
        
        /**
         * Clear the list of booted models so they will be re-booted.
         *
         * @return void 
         * @static 
         */
        public static function clearBootedModels(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::clearBootedModels();
        }
        
        /**
         * Register a new global scope on the model.
         *
         * @param \Illuminate\Database\Eloquent\Scope|\Closure|string $scope
         * @param \Closure|null $implementation
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function addGlobalScope($scope, $implementation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::addGlobalScope($scope, $implementation);
        }
        
        /**
         * Determine if a model has a global scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return bool 
         * @static 
         */
        public static function hasGlobalScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::hasGlobalScope($scope);
        }
        
        /**
         * Get a global scope registered with the model.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return \Illuminate\Database\Eloquent\Scope|\Closure|null 
         * @static 
         */
        public static function getGlobalScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getGlobalScope($scope);
        }
        
        /**
         * Get the global scopes for this class instance.
         *
         * @return array 
         * @static 
         */
        public static function getGlobalScopes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getGlobalScopes();
        }
        
        /**
         * Register an observer with the Model.
         *
         * @param object|string $class
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function observe($class, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::observe($class, $priority);
        }
        
        /**
         * Fill the model with an array of attributes.
         *
         * @param array $attributes
         * @return $this 
         * @throws \Illuminate\Database\Eloquent\MassAssignmentException
         * @static 
         */
        public static function fill($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::fill($attributes);
        }
        
        /**
         * Fill the model with an array of attributes. Force mass assignment.
         *
         * @param array $attributes
         * @return $this 
         * @static 
         */
        public static function forceFill($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::forceFill($attributes);
        }
        
        /**
         * Create a new instance of the given model.
         *
         * @param array $attributes
         * @param bool $exists
         * @return static 
         * @static 
         */
        public static function newInstance($attributes = array(), $exists = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::newInstance($attributes, $exists);
        }
        
        /**
         * Create a new model instance that is existing.
         *
         * @param array $attributes
         * @param string|null $connection
         * @return static 
         * @static 
         */
        public static function newFromBuilder($attributes = array(), $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::newFromBuilder($attributes, $connection);
        }
        
        /**
         * Create a collection of models from plain arrays.
         *
         * @param array $items
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function hydrate($items, $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::hydrate($items, $connection);
        }
        
        /**
         * Create a collection of models from a raw query.
         *
         * @param string $query
         * @param array $bindings
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function hydrateRaw($query, $bindings = array(), $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::hydrateRaw($query, $bindings, $connection);
        }
        
        /**
         * Save a new model and return the instance.
         *
         * @param array $attributes
         * @return static 
         * @static 
         */
        public static function create($attributes = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::create($attributes);
        }
        
        /**
         * Save a new model and return the instance. Allow mass-assignment.
         *
         * @param array $attributes
         * @return static 
         * @static 
         */
        public static function forceCreate($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::forceCreate($attributes);
        }
        
        /**
         * Begin querying the model.
         *
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function query(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::query();
        }
        
        /**
         * Begin querying the model on a given connection.
         *
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function on($connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::on($connection);
        }
        
        /**
         * Begin querying the model on the write connection.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function onWriteConnection(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::onWriteConnection();
        }
        
        /**
         * Get all of the models from the database.
         *
         * @param array|mixed $columns
         * @return \Illuminate\Database\Eloquent\Collection|static[] 
         * @static 
         */
        public static function all($columns = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::all($columns);
        }
        
        /**
         * Reload a fresh model instance from the database.
         *
         * @param array|string $with
         * @return $this|null 
         * @static 
         */
        public static function fresh($with = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::fresh($with);
        }
        
        /**
         * Eager load relations on the model.
         *
         * @param array|string $relations
         * @return $this 
         * @static 
         */
        public static function load($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::load($relations);
        }
        
        /**
         * Begin querying a model with eager loading.
         *
         * @param array|string $relations
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function with($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::with($relations);
        }
        
        /**
         * Append attributes to query when building a query.
         *
         * @param array|string $attributes
         * @return $this 
         * @static 
         */
        public static function append($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::append($attributes);
        }
        
        /**
         * Define a one-to-one relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasOne 
         * @static 
         */
        public static function hasOne($related, $foreignKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::hasOne($related, $foreignKey, $localKey);
        }
        
        /**
         * Define a polymorphic one-to-one relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $type
         * @param string $id
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphOne 
         * @static 
         */
        public static function morphOne($related, $name, $type = null, $id = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::morphOne($related, $name, $type, $id, $localKey);
        }
        
        /**
         * Define an inverse one-to-one or many relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $otherKey
         * @param string $relation
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo 
         * @static 
         */
        public static function belongsTo($related, $foreignKey = null, $otherKey = null, $relation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::belongsTo($related, $foreignKey, $otherKey, $relation);
        }
        
        /**
         * Define a polymorphic, inverse one-to-one or many relationship.
         *
         * @param string $name
         * @param string $type
         * @param string $id
         * @return \Illuminate\Database\Eloquent\Relations\MorphTo 
         * @static 
         */
        public static function morphTo($name = null, $type = null, $id = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::morphTo($name, $type, $id);
        }
        
        /**
         * Retrieve the fully qualified class name from a slug.
         *
         * @param string $class
         * @return string 
         * @static 
         */
        public static function getActualClassNameForMorph($class){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getActualClassNameForMorph($class);
        }
        
        /**
         * Define a one-to-many relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasMany 
         * @static 
         */
        public static function hasMany($related, $foreignKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::hasMany($related, $foreignKey, $localKey);
        }
        
        /**
         * Define a has-many-through relationship.
         *
         * @param string $related
         * @param string $through
         * @param string|null $firstKey
         * @param string|null $secondKey
         * @param string|null $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough 
         * @static 
         */
        public static function hasManyThrough($related, $through, $firstKey = null, $secondKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::hasManyThrough($related, $through, $firstKey, $secondKey, $localKey);
        }
        
        /**
         * Define a polymorphic one-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $type
         * @param string $id
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphMany 
         * @static 
         */
        public static function morphMany($related, $name, $type = null, $id = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::morphMany($related, $name, $type, $id, $localKey);
        }
        
        /**
         * Define a many-to-many relationship.
         *
         * @param string $related
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @param string $relation
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany 
         * @static 
         */
        public static function belongsToMany($related, $table = null, $foreignKey = null, $otherKey = null, $relation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::belongsToMany($related, $table, $foreignKey, $otherKey, $relation);
        }
        
        /**
         * Define a polymorphic many-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @param bool $inverse
         * @return \Illuminate\Database\Eloquent\Relations\MorphToMany 
         * @static 
         */
        public static function morphToMany($related, $name, $table = null, $foreignKey = null, $otherKey = null, $inverse = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::morphToMany($related, $name, $table, $foreignKey, $otherKey, $inverse);
        }
        
        /**
         * Define a polymorphic, inverse many-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphToMany 
         * @static 
         */
        public static function morphedByMany($related, $name, $table = null, $foreignKey = null, $otherKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::morphedByMany($related, $name, $table, $foreignKey, $otherKey);
        }
        
        /**
         * Get the joining table name for a many-to-many relation.
         *
         * @param string $related
         * @return string 
         * @static 
         */
        public static function joiningTable($related){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::joiningTable($related);
        }
        
        /**
         * Destroy the models for the given IDs.
         *
         * @param array|int $ids
         * @return int 
         * @static 
         */
        public static function destroy($ids){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::destroy($ids);
        }
        
        /**
         * Delete the model from the database.
         *
         * @return bool|null 
         * @throws \Exception
         * @static 
         */
        public static function delete(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::delete();
        }
        
        /**
         * Force a hard delete on a soft deleted model.
         * 
         * This method protects developers from running forceDelete when trait is missing.
         *
         * @return bool|null 
         * @static 
         */
        public static function forceDelete(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::forceDelete();
        }
        
        /**
         * Register a saving model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function saving($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::saving($callback, $priority);
        }
        
        /**
         * Register a saved model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function saved($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::saved($callback, $priority);
        }
        
        /**
         * Register an updating model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function updating($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::updating($callback, $priority);
        }
        
        /**
         * Register an updated model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function updated($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::updated($callback, $priority);
        }
        
        /**
         * Register a creating model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function creating($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::creating($callback, $priority);
        }
        
        /**
         * Register a created model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function created($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::created($callback, $priority);
        }
        
        /**
         * Register a deleting model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function deleting($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::deleting($callback, $priority);
        }
        
        /**
         * Register a deleted model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function deleted($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::deleted($callback, $priority);
        }
        
        /**
         * Remove all of the event listeners for the model.
         *
         * @return void 
         * @static 
         */
        public static function flushEventListeners(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::flushEventListeners();
        }
        
        /**
         * Get the observable event names.
         *
         * @return array 
         * @static 
         */
        public static function getObservableEvents(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getObservableEvents();
        }
        
        /**
         * Set the observable event names.
         *
         * @param array $observables
         * @return $this 
         * @static 
         */
        public static function setObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setObservableEvents($observables);
        }
        
        /**
         * Add an observable event name.
         *
         * @param array|mixed $observables
         * @return void 
         * @static 
         */
        public static function addObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::addObservableEvents($observables);
        }
        
        /**
         * Remove an observable event name.
         *
         * @param array|mixed $observables
         * @return void 
         * @static 
         */
        public static function removeObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::removeObservableEvents($observables);
        }
        
        /**
         * Update the model in the database.
         *
         * @param array $attributes
         * @param array $options
         * @return bool|int 
         * @static 
         */
        public static function update($attributes = array(), $options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::update($attributes, $options);
        }
        
        /**
         * Save the model and all of its relationships.
         *
         * @return bool 
         * @static 
         */
        public static function push(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::push();
        }
        
        /**
         * Save the model to the database.
         *
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function save($options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::save($options);
        }
        
        /**
         * Save the model to the database using transaction.
         *
         * @param array $options
         * @return bool 
         * @throws \Throwable
         * @static 
         */
        public static function saveOrFail($options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::saveOrFail($options);
        }
        
        /**
         * Touch the owning relations of the model.
         *
         * @return void 
         * @static 
         */
        public static function touchOwners(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::touchOwners();
        }
        
        /**
         * Determine if the model touches a given relation.
         *
         * @param string $relation
         * @return bool 
         * @static 
         */
        public static function touches($relation){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::touches($relation);
        }
        
        /**
         * Update the model's update timestamp.
         *
         * @return bool 
         * @static 
         */
        public static function touch(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::touch();
        }
        
        /**
         * Set the value of the "created at" attribute.
         *
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setCreatedAt($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setCreatedAt($value);
        }
        
        /**
         * Set the value of the "updated at" attribute.
         *
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setUpdatedAt($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setUpdatedAt($value);
        }
        
        /**
         * Get the name of the "created at" column.
         *
         * @return string 
         * @static 
         */
        public static function getCreatedAtColumn(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getCreatedAtColumn();
        }
        
        /**
         * Get the name of the "updated at" column.
         *
         * @return string 
         * @static 
         */
        public static function getUpdatedAtColumn(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getUpdatedAtColumn();
        }
        
        /**
         * Get a fresh timestamp for the model.
         *
         * @return \Carbon\Carbon 
         * @static 
         */
        public static function freshTimestamp(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::freshTimestamp();
        }
        
        /**
         * Get a fresh timestamp for the model.
         *
         * @return string 
         * @static 
         */
        public static function freshTimestampString(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::freshTimestampString();
        }
        
        /**
         * Get a new query builder for the model's table.
         *
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function newQuery(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::newQuery();
        }
        
        /**
         * Get a new query instance without a given scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function newQueryWithoutScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::newQueryWithoutScope($scope);
        }
        
        /**
         * Get a new query builder that doesn't have any global scopes.
         *
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function newQueryWithoutScopes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::newQueryWithoutScopes();
        }
        
        /**
         * Create a new Eloquent query builder for the model.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function newEloquentBuilder($query){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::newEloquentBuilder($query);
        }
        
        /**
         * Create a new Eloquent Collection instance.
         *
         * @param array $models
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function newCollection($models = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::newCollection($models);
        }
        
        /**
         * Create a new pivot model instance.
         *
         * @param \Illuminate\Database\Eloquent\Model $parent
         * @param array $attributes
         * @param string $table
         * @param bool $exists
         * @return \Illuminate\Database\Eloquent\Relations\Pivot 
         * @static 
         */
        public static function newPivot($parent, $attributes, $table, $exists){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::newPivot($parent, $attributes, $table, $exists);
        }
        
        /**
         * Get the table associated with the model.
         *
         * @return string 
         * @static 
         */
        public static function getTable(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getTable();
        }
        
        /**
         * Set the table associated with the model.
         *
         * @param string $table
         * @return $this 
         * @static 
         */
        public static function setTable($table){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setTable($table);
        }
        
        /**
         * Get the value of the model's primary key.
         *
         * @return mixed 
         * @static 
         */
        public static function getKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getKey();
        }
        
        /**
         * Get the queueable identity for the entity.
         *
         * @return mixed 
         * @static 
         */
        public static function getQueueableId(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getQueueableId();
        }
        
        /**
         * Get the primary key for the model.
         *
         * @return string 
         * @static 
         */
        public static function getKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getKeyName();
        }
        
        /**
         * Set the primary key for the model.
         *
         * @param string $key
         * @return $this 
         * @static 
         */
        public static function setKeyName($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setKeyName($key);
        }
        
        /**
         * Get the table qualified key name.
         *
         * @return string 
         * @static 
         */
        public static function getQualifiedKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getQualifiedKeyName();
        }
        
        /**
         * Get the value of the model's route key.
         *
         * @return mixed 
         * @static 
         */
        public static function getRouteKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getRouteKey();
        }
        
        /**
         * Get the route key for the model.
         *
         * @return string 
         * @static 
         */
        public static function getRouteKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getRouteKeyName();
        }
        
        /**
         * Determine if the model uses timestamps.
         *
         * @return bool 
         * @static 
         */
        public static function usesTimestamps(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::usesTimestamps();
        }
        
        /**
         * Get the class name for polymorphic relations.
         *
         * @return string 
         * @static 
         */
        public static function getMorphClass(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getMorphClass();
        }
        
        /**
         * Get the number of models to return per page.
         *
         * @return int 
         * @static 
         */
        public static function getPerPage(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getPerPage();
        }
        
        /**
         * Set the number of models to return per page.
         *
         * @param int $perPage
         * @return $this 
         * @static 
         */
        public static function setPerPage($perPage){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setPerPage($perPage);
        }
        
        /**
         * Get the default foreign key name for the model.
         *
         * @return string 
         * @static 
         */
        public static function getForeignKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getForeignKey();
        }
        
        /**
         * Get the hidden attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getHidden(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getHidden();
        }
        
        /**
         * Set the hidden attributes for the model.
         *
         * @param array $hidden
         * @return $this 
         * @static 
         */
        public static function setHidden($hidden){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setHidden($hidden);
        }
        
        /**
         * Add hidden attributes for the model.
         *
         * @param array|string|null $attributes
         * @return void 
         * @static 
         */
        public static function addHidden($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::addHidden($attributes);
        }
        
        /**
         * Make the given, typically hidden, attributes visible.
         *
         * @param array|string $attributes
         * @return $this 
         * @static 
         */
        public static function makeVisible($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::makeVisible($attributes);
        }
        
        /**
         * Make the given, typically hidden, attributes visible.
         *
         * @param array|string $attributes
         * @return $this 
         * @deprecated since version 5.2. Use the "makeVisible" method directly.
         * @static 
         */
        public static function withHidden($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::withHidden($attributes);
        }
        
        /**
         * Get the visible attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getVisible(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getVisible();
        }
        
        /**
         * Set the visible attributes for the model.
         *
         * @param array $visible
         * @return $this 
         * @static 
         */
        public static function setVisible($visible){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setVisible($visible);
        }
        
        /**
         * Add visible attributes for the model.
         *
         * @param array|string|null $attributes
         * @return void 
         * @static 
         */
        public static function addVisible($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::addVisible($attributes);
        }
        
        /**
         * Set the accessors to append to model arrays.
         *
         * @param array $appends
         * @return $this 
         * @static 
         */
        public static function setAppends($appends){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setAppends($appends);
        }
        
        /**
         * Get the fillable attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getFillable(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getFillable();
        }
        
        /**
         * Set the fillable attributes for the model.
         *
         * @param array $fillable
         * @return $this 
         * @static 
         */
        public static function fillable($fillable){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::fillable($fillable);
        }
        
        /**
         * Get the guarded attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getGuarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getGuarded();
        }
        
        /**
         * Set the guarded attributes for the model.
         *
         * @param array $guarded
         * @return $this 
         * @static 
         */
        public static function guard($guarded){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::guard($guarded);
        }
        
        /**
         * Disable all mass assignable restrictions.
         *
         * @param bool $state
         * @return void 
         * @static 
         */
        public static function unguard($state = true){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::unguard($state);
        }
        
        /**
         * Enable the mass assignment restrictions.
         *
         * @return void 
         * @static 
         */
        public static function reguard(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::reguard();
        }
        
        /**
         * Determine if current state is "unguarded".
         *
         * @return bool 
         * @static 
         */
        public static function isUnguarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::isUnguarded();
        }
        
        /**
         * Run the given callable while being unguarded.
         *
         * @param callable $callback
         * @return mixed 
         * @static 
         */
        public static function unguarded($callback){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::unguarded($callback);
        }
        
        /**
         * Determine if the given attribute may be mass assigned.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function isFillable($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::isFillable($key);
        }
        
        /**
         * Determine if the given key is guarded.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function isGuarded($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::isGuarded($key);
        }
        
        /**
         * Determine if the model is totally guarded.
         *
         * @return bool 
         * @static 
         */
        public static function totallyGuarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::totallyGuarded();
        }
        
        /**
         * Get the relationships that are touched on save.
         *
         * @return array 
         * @static 
         */
        public static function getTouchedRelations(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getTouchedRelations();
        }
        
        /**
         * Set the relationships that are touched on save.
         *
         * @param array $touches
         * @return $this 
         * @static 
         */
        public static function setTouchedRelations($touches){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setTouchedRelations($touches);
        }
        
        /**
         * Get the value indicating whether the IDs are incrementing.
         *
         * @return bool 
         * @static 
         */
        public static function getIncrementing(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getIncrementing();
        }
        
        /**
         * Set whether IDs are incrementing.
         *
         * @param bool $value
         * @return $this 
         * @static 
         */
        public static function setIncrementing($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setIncrementing($value);
        }
        
        /**
         * Convert the model instance to JSON.
         *
         * @param int $options
         * @return string 
         * @static 
         */
        public static function toJson($options = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::toJson($options);
        }
        
        /**
         * Convert the object into something JSON serializable.
         *
         * @return array 
         * @static 
         */
        public static function jsonSerialize(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::jsonSerialize();
        }
        
        /**
         * Convert the model instance to an array.
         *
         * @return array 
         * @static 
         */
        public static function toArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::toArray();
        }
        
        /**
         * Convert the model's attributes to an array.
         *
         * @return array 
         * @static 
         */
        public static function attributesToArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::attributesToArray();
        }
        
        /**
         * Get the model's relationships in array form.
         *
         * @return array 
         * @static 
         */
        public static function relationsToArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::relationsToArray();
        }
        
        /**
         * Get an attribute from the model.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getAttribute($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getAttribute($key);
        }
        
        /**
         * Get a plain attribute (not a relationship).
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getAttributeValue($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getAttributeValue($key);
        }
        
        /**
         * Get a relationship.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getRelationValue($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getRelationValue($key);
        }
        
        /**
         * Determine if a get mutator exists for an attribute.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasGetMutator($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::hasGetMutator($key);
        }
        
        /**
         * Determine whether an attribute should be cast to a native type.
         *
         * @param string $key
         * @param array|string|null $types
         * @return bool 
         * @static 
         */
        public static function hasCast($key, $types = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::hasCast($key, $types);
        }
        
        /**
         * Get the casts array.
         *
         * @return array 
         * @static 
         */
        public static function getCasts(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getCasts();
        }
        
        /**
         * Set a given attribute on the model.
         *
         * @param string $key
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setAttribute($key, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setAttribute($key, $value);
        }
        
        /**
         * Determine if a set mutator exists for an attribute.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasSetMutator($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::hasSetMutator($key);
        }
        
        /**
         * Get the attributes that should be converted to dates.
         *
         * @return array 
         * @static 
         */
        public static function getDates(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getDates();
        }
        
        /**
         * Convert a DateTime to a storable string.
         *
         * @param \DateTime|int $value
         * @return string 
         * @static 
         */
        public static function fromDateTime($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::fromDateTime($value);
        }
        
        /**
         * Set the date format used by the model.
         *
         * @param string $format
         * @return $this 
         * @static 
         */
        public static function setDateFormat($format){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setDateFormat($format);
        }
        
        /**
         * Decode the given JSON back into an array or object.
         *
         * @param string $value
         * @param bool $asObject
         * @return mixed 
         * @static 
         */
        public static function fromJson($value, $asObject = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::fromJson($value, $asObject);
        }
        
        /**
         * Clone the model into a new, non-existing instance.
         *
         * @param array|null $except
         * @return \Illuminate\Database\Eloquent\Model 
         * @static 
         */
        public static function replicate($except = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::replicate($except);
        }
        
        /**
         * Get all of the current attributes on the model.
         *
         * @return array 
         * @static 
         */
        public static function getAttributes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getAttributes();
        }
        
        /**
         * Set the array of model attributes. No checking is done.
         *
         * @param array $attributes
         * @param bool $sync
         * @return $this 
         * @static 
         */
        public static function setRawAttributes($attributes, $sync = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setRawAttributes($attributes, $sync);
        }
        
        /**
         * Get the model's original attribute values.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed|array 
         * @static 
         */
        public static function getOriginal($key = null, $default = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getOriginal($key, $default);
        }
        
        /**
         * Sync the original attributes with the current.
         *
         * @return $this 
         * @static 
         */
        public static function syncOriginal(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::syncOriginal();
        }
        
        /**
         * Sync a single original attribute with its current value.
         *
         * @param string $attribute
         * @return $this 
         * @static 
         */
        public static function syncOriginalAttribute($attribute){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::syncOriginalAttribute($attribute);
        }
        
        /**
         * Determine if the model or given attribute(s) have been modified.
         *
         * @param array|string|null $attributes
         * @return bool 
         * @static 
         */
        public static function isDirty($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::isDirty($attributes);
        }
        
        /**
         * Get the attributes that have been changed since last sync.
         *
         * @return array 
         * @static 
         */
        public static function getDirty(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getDirty();
        }
        
        /**
         * Get all the loaded relations for the instance.
         *
         * @return array 
         * @static 
         */
        public static function getRelations(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getRelations();
        }
        
        /**
         * Get a specified relationship.
         *
         * @param string $relation
         * @return mixed 
         * @static 
         */
        public static function getRelation($relation){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getRelation($relation);
        }
        
        /**
         * Determine if the given relation is loaded.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function relationLoaded($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::relationLoaded($key);
        }
        
        /**
         * Set the specific relationship in the model.
         *
         * @param string $relation
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setRelation($relation, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setRelation($relation, $value);
        }
        
        /**
         * Set the entire relations array on the model.
         *
         * @param array $relations
         * @return $this 
         * @static 
         */
        public static function setRelations($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setRelations($relations);
        }
        
        /**
         * Get the database connection for the model.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function getConnection(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getConnection();
        }
        
        /**
         * Get the current connection name for the model.
         *
         * @return string 
         * @static 
         */
        public static function getConnectionName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getConnectionName();
        }
        
        /**
         * Set the connection associated with the model.
         *
         * @param string $name
         * @return $this 
         * @static 
         */
        public static function setConnection($name){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::setConnection($name);
        }
        
        /**
         * Resolve a connection instance.
         *
         * @param string|null $connection
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function resolveConnection($connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::resolveConnection($connection);
        }
        
        /**
         * Get the connection resolver instance.
         *
         * @return \Illuminate\Database\ConnectionResolverInterface 
         * @static 
         */
        public static function getConnectionResolver(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getConnectionResolver();
        }
        
        /**
         * Set the connection resolver instance.
         *
         * @param \Illuminate\Database\ConnectionResolverInterface $resolver
         * @return void 
         * @static 
         */
        public static function setConnectionResolver($resolver){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::setConnectionResolver($resolver);
        }
        
        /**
         * Unset the connection resolver for models.
         *
         * @return void 
         * @static 
         */
        public static function unsetConnectionResolver(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::unsetConnectionResolver();
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */
        public static function getEventDispatcher(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
         * @return void 
         * @static 
         */
        public static function setEventDispatcher($dispatcher){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::setEventDispatcher($dispatcher);
        }
        
        /**
         * Unset the event dispatcher for models.
         *
         * @return void 
         * @static 
         */
        public static function unsetEventDispatcher(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::unsetEventDispatcher();
        }
        
        /**
         * Get the mutated attributes for a given instance.
         *
         * @return array 
         * @static 
         */
        public static function getMutatedAttributes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::getMutatedAttributes();
        }
        
        /**
         * Extract and cache all the mutated attributes of a class.
         *
         * @param string $class
         * @return void 
         * @static 
         */
        public static function cacheMutatedAttributes($class){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::cacheMutatedAttributes($class);
        }
        
        /**
         * Determine if the given attribute exists.
         *
         * @param mixed $offset
         * @return bool 
         * @static 
         */
        public static function offsetExists($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::offsetExists($offset);
        }
        
        /**
         * Get the value for a given offset.
         *
         * @param mixed $offset
         * @return mixed 
         * @static 
         */
        public static function offsetGet($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitTicket::offsetGet($offset);
        }
        
        /**
         * Set the value for a given offset.
         *
         * @param mixed $offset
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($offset, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::offsetSet($offset, $value);
        }
        
        /**
         * Unset the value for a given offset.
         *
         * @param mixed $offset
         * @return void 
         * @static 
         */
        public static function offsetUnset($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitTicket::offsetUnset($offset);
        }
        
        /**
         * Ticket owner
         *
         * @return \Kordy\Ticketit\Models\BelongsTo 
         * @static 
         */
        public static function ticketable(){
            return \Kordy\Ticketit\Models\TicketitTicket::ticketable();
        }
        
        /**
         * Ticket agent
         *
         * @return \Kordy\Ticketit\Models\BelongsTo 
         * @static 
         */
        public static function agent(){
            return \Kordy\Ticketit\Models\TicketitTicket::agent();
        }
        
        /**
         * Ticket status
         *
         * @return \Kordy\Ticketit\Models\BelongsTo 
         * @static 
         */
        public static function status(){
            return \Kordy\Ticketit\Models\TicketitTicket::status();
        }
        
        /**
         * Ticket priority
         *
         * @return \Kordy\Ticketit\Models\BelongsTo 
         * @static 
         */
        public static function priority(){
            return \Kordy\Ticketit\Models\TicketitTicket::priority();
        }
        
        /**
         * Ticket category
         *
         * @return \Kordy\Ticketit\Models\BelongsTo 
         * @static 
         */
        public static function category(){
            return \Kordy\Ticketit\Models\TicketitTicket::category();
        }
        
        /**
         * Ticket comments
         *
         * @return \Kordy\Ticketit\Models\HasMany 
         * @static 
         */
        public static function comments(){
            return \Kordy\Ticketit\Models\TicketitTicket::comments();
        }
        
        /**
         * Filter tickets by agent_id
         *
         * @param $query
         * @param integer $agent_id
         * @static 
         */
        public static function scopeByAgent($query, $agent_id){
            return \Kordy\Ticketit\Models\TicketitTicket::scopeByAgent($query, $agent_id);
        }
        
        /**
         * Filter tickets by status_id
         *
         * @param $query
         * @param integer $status_id
         * @static 
         */
        public static function scopeByStatus($query, $status_id){
            return \Kordy\Ticketit\Models\TicketitTicket::scopeByStatus($query, $status_id);
        }
        
        /**
         * Filter tickets by priority_id
         *
         * @param $query
         * @param integer $priority_id
         * @static 
         */
        public static function scopeByPriority($query, $priority_id){
            return \Kordy\Ticketit\Models\TicketitTicket::scopeByPriority($query, $priority_id);
        }
        
        /**
         * Filter tickets by category_id
         *
         * @param $query
         * @param integer $category_id
         * @static 
         */
        public static function scopeByCategory($query, $category_id){
            return \Kordy\Ticketit\Models\TicketitTicket::scopeByCategory($query, $category_id);
        }
        
    }


    class TicketitComment extends \Kordy\Ticketit\Facades\TicketitCommentFacade{
        
        /**
         * Clear the list of booted models so they will be re-booted.
         *
         * @return void 
         * @static 
         */
        public static function clearBootedModels(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::clearBootedModels();
        }
        
        /**
         * Register a new global scope on the model.
         *
         * @param \Illuminate\Database\Eloquent\Scope|\Closure|string $scope
         * @param \Closure|null $implementation
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function addGlobalScope($scope, $implementation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::addGlobalScope($scope, $implementation);
        }
        
        /**
         * Determine if a model has a global scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return bool 
         * @static 
         */
        public static function hasGlobalScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::hasGlobalScope($scope);
        }
        
        /**
         * Get a global scope registered with the model.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return \Illuminate\Database\Eloquent\Scope|\Closure|null 
         * @static 
         */
        public static function getGlobalScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getGlobalScope($scope);
        }
        
        /**
         * Get the global scopes for this class instance.
         *
         * @return array 
         * @static 
         */
        public static function getGlobalScopes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getGlobalScopes();
        }
        
        /**
         * Register an observer with the Model.
         *
         * @param object|string $class
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function observe($class, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::observe($class, $priority);
        }
        
        /**
         * Fill the model with an array of attributes.
         *
         * @param array $attributes
         * @return $this 
         * @throws \Illuminate\Database\Eloquent\MassAssignmentException
         * @static 
         */
        public static function fill($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::fill($attributes);
        }
        
        /**
         * Fill the model with an array of attributes. Force mass assignment.
         *
         * @param array $attributes
         * @return $this 
         * @static 
         */
        public static function forceFill($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::forceFill($attributes);
        }
        
        /**
         * Create a new instance of the given model.
         *
         * @param array $attributes
         * @param bool $exists
         * @return static 
         * @static 
         */
        public static function newInstance($attributes = array(), $exists = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::newInstance($attributes, $exists);
        }
        
        /**
         * Create a new model instance that is existing.
         *
         * @param array $attributes
         * @param string|null $connection
         * @return static 
         * @static 
         */
        public static function newFromBuilder($attributes = array(), $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::newFromBuilder($attributes, $connection);
        }
        
        /**
         * Create a collection of models from plain arrays.
         *
         * @param array $items
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function hydrate($items, $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::hydrate($items, $connection);
        }
        
        /**
         * Create a collection of models from a raw query.
         *
         * @param string $query
         * @param array $bindings
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function hydrateRaw($query, $bindings = array(), $connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::hydrateRaw($query, $bindings, $connection);
        }
        
        /**
         * Save a new model and return the instance.
         *
         * @param array $attributes
         * @return static 
         * @static 
         */
        public static function create($attributes = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::create($attributes);
        }
        
        /**
         * Save a new model and return the instance. Allow mass-assignment.
         *
         * @param array $attributes
         * @return static 
         * @static 
         */
        public static function forceCreate($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::forceCreate($attributes);
        }
        
        /**
         * Begin querying the model.
         *
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function query(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::query();
        }
        
        /**
         * Begin querying the model on a given connection.
         *
         * @param string|null $connection
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function on($connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::on($connection);
        }
        
        /**
         * Begin querying the model on the write connection.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function onWriteConnection(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::onWriteConnection();
        }
        
        /**
         * Get all of the models from the database.
         *
         * @param array|mixed $columns
         * @return \Illuminate\Database\Eloquent\Collection|static[] 
         * @static 
         */
        public static function all($columns = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::all($columns);
        }
        
        /**
         * Reload a fresh model instance from the database.
         *
         * @param array|string $with
         * @return $this|null 
         * @static 
         */
        public static function fresh($with = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::fresh($with);
        }
        
        /**
         * Eager load relations on the model.
         *
         * @param array|string $relations
         * @return $this 
         * @static 
         */
        public static function load($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::load($relations);
        }
        
        /**
         * Begin querying a model with eager loading.
         *
         * @param array|string $relations
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function with($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::with($relations);
        }
        
        /**
         * Append attributes to query when building a query.
         *
         * @param array|string $attributes
         * @return $this 
         * @static 
         */
        public static function append($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::append($attributes);
        }
        
        /**
         * Define a one-to-one relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasOne 
         * @static 
         */
        public static function hasOne($related, $foreignKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::hasOne($related, $foreignKey, $localKey);
        }
        
        /**
         * Define a polymorphic one-to-one relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $type
         * @param string $id
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphOne 
         * @static 
         */
        public static function morphOne($related, $name, $type = null, $id = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::morphOne($related, $name, $type, $id, $localKey);
        }
        
        /**
         * Define an inverse one-to-one or many relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $otherKey
         * @param string $relation
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo 
         * @static 
         */
        public static function belongsTo($related, $foreignKey = null, $otherKey = null, $relation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::belongsTo($related, $foreignKey, $otherKey, $relation);
        }
        
        /**
         * Define a polymorphic, inverse one-to-one or many relationship.
         *
         * @param string $name
         * @param string $type
         * @param string $id
         * @return \Illuminate\Database\Eloquent\Relations\MorphTo 
         * @static 
         */
        public static function morphTo($name = null, $type = null, $id = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::morphTo($name, $type, $id);
        }
        
        /**
         * Retrieve the fully qualified class name from a slug.
         *
         * @param string $class
         * @return string 
         * @static 
         */
        public static function getActualClassNameForMorph($class){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getActualClassNameForMorph($class);
        }
        
        /**
         * Define a one-to-many relationship.
         *
         * @param string $related
         * @param string $foreignKey
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasMany 
         * @static 
         */
        public static function hasMany($related, $foreignKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::hasMany($related, $foreignKey, $localKey);
        }
        
        /**
         * Define a has-many-through relationship.
         *
         * @param string $related
         * @param string $through
         * @param string|null $firstKey
         * @param string|null $secondKey
         * @param string|null $localKey
         * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough 
         * @static 
         */
        public static function hasManyThrough($related, $through, $firstKey = null, $secondKey = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::hasManyThrough($related, $through, $firstKey, $secondKey, $localKey);
        }
        
        /**
         * Define a polymorphic one-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $type
         * @param string $id
         * @param string $localKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphMany 
         * @static 
         */
        public static function morphMany($related, $name, $type = null, $id = null, $localKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::morphMany($related, $name, $type, $id, $localKey);
        }
        
        /**
         * Define a many-to-many relationship.
         *
         * @param string $related
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @param string $relation
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany 
         * @static 
         */
        public static function belongsToMany($related, $table = null, $foreignKey = null, $otherKey = null, $relation = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::belongsToMany($related, $table, $foreignKey, $otherKey, $relation);
        }
        
        /**
         * Define a polymorphic many-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @param bool $inverse
         * @return \Illuminate\Database\Eloquent\Relations\MorphToMany 
         * @static 
         */
        public static function morphToMany($related, $name, $table = null, $foreignKey = null, $otherKey = null, $inverse = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::morphToMany($related, $name, $table, $foreignKey, $otherKey, $inverse);
        }
        
        /**
         * Define a polymorphic, inverse many-to-many relationship.
         *
         * @param string $related
         * @param string $name
         * @param string $table
         * @param string $foreignKey
         * @param string $otherKey
         * @return \Illuminate\Database\Eloquent\Relations\MorphToMany 
         * @static 
         */
        public static function morphedByMany($related, $name, $table = null, $foreignKey = null, $otherKey = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::morphedByMany($related, $name, $table, $foreignKey, $otherKey);
        }
        
        /**
         * Get the joining table name for a many-to-many relation.
         *
         * @param string $related
         * @return string 
         * @static 
         */
        public static function joiningTable($related){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::joiningTable($related);
        }
        
        /**
         * Destroy the models for the given IDs.
         *
         * @param array|int $ids
         * @return int 
         * @static 
         */
        public static function destroy($ids){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::destroy($ids);
        }
        
        /**
         * Delete the model from the database.
         *
         * @return bool|null 
         * @throws \Exception
         * @static 
         */
        public static function delete(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::delete();
        }
        
        /**
         * Force a hard delete on a soft deleted model.
         * 
         * This method protects developers from running forceDelete when trait is missing.
         *
         * @return bool|null 
         * @static 
         */
        public static function forceDelete(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::forceDelete();
        }
        
        /**
         * Register a saving model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function saving($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::saving($callback, $priority);
        }
        
        /**
         * Register a saved model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function saved($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::saved($callback, $priority);
        }
        
        /**
         * Register an updating model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function updating($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::updating($callback, $priority);
        }
        
        /**
         * Register an updated model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function updated($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::updated($callback, $priority);
        }
        
        /**
         * Register a creating model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function creating($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::creating($callback, $priority);
        }
        
        /**
         * Register a created model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function created($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::created($callback, $priority);
        }
        
        /**
         * Register a deleting model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function deleting($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::deleting($callback, $priority);
        }
        
        /**
         * Register a deleted model event with the dispatcher.
         *
         * @param \Closure|string $callback
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function deleted($callback, $priority = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::deleted($callback, $priority);
        }
        
        /**
         * Remove all of the event listeners for the model.
         *
         * @return void 
         * @static 
         */
        public static function flushEventListeners(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::flushEventListeners();
        }
        
        /**
         * Get the observable event names.
         *
         * @return array 
         * @static 
         */
        public static function getObservableEvents(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getObservableEvents();
        }
        
        /**
         * Set the observable event names.
         *
         * @param array $observables
         * @return $this 
         * @static 
         */
        public static function setObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setObservableEvents($observables);
        }
        
        /**
         * Add an observable event name.
         *
         * @param array|mixed $observables
         * @return void 
         * @static 
         */
        public static function addObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::addObservableEvents($observables);
        }
        
        /**
         * Remove an observable event name.
         *
         * @param array|mixed $observables
         * @return void 
         * @static 
         */
        public static function removeObservableEvents($observables){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::removeObservableEvents($observables);
        }
        
        /**
         * Update the model in the database.
         *
         * @param array $attributes
         * @param array $options
         * @return bool|int 
         * @static 
         */
        public static function update($attributes = array(), $options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::update($attributes, $options);
        }
        
        /**
         * Save the model and all of its relationships.
         *
         * @return bool 
         * @static 
         */
        public static function push(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::push();
        }
        
        /**
         * Save the model to the database.
         *
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function save($options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::save($options);
        }
        
        /**
         * Save the model to the database using transaction.
         *
         * @param array $options
         * @return bool 
         * @throws \Throwable
         * @static 
         */
        public static function saveOrFail($options = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::saveOrFail($options);
        }
        
        /**
         * Touch the owning relations of the model.
         *
         * @return void 
         * @static 
         */
        public static function touchOwners(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::touchOwners();
        }
        
        /**
         * Determine if the model touches a given relation.
         *
         * @param string $relation
         * @return bool 
         * @static 
         */
        public static function touches($relation){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::touches($relation);
        }
        
        /**
         * Update the model's update timestamp.
         *
         * @return bool 
         * @static 
         */
        public static function touch(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::touch();
        }
        
        /**
         * Set the value of the "created at" attribute.
         *
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setCreatedAt($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setCreatedAt($value);
        }
        
        /**
         * Set the value of the "updated at" attribute.
         *
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setUpdatedAt($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setUpdatedAt($value);
        }
        
        /**
         * Get the name of the "created at" column.
         *
         * @return string 
         * @static 
         */
        public static function getCreatedAtColumn(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getCreatedAtColumn();
        }
        
        /**
         * Get the name of the "updated at" column.
         *
         * @return string 
         * @static 
         */
        public static function getUpdatedAtColumn(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getUpdatedAtColumn();
        }
        
        /**
         * Get a fresh timestamp for the model.
         *
         * @return \Carbon\Carbon 
         * @static 
         */
        public static function freshTimestamp(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::freshTimestamp();
        }
        
        /**
         * Get a fresh timestamp for the model.
         *
         * @return string 
         * @static 
         */
        public static function freshTimestampString(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::freshTimestampString();
        }
        
        /**
         * Get a new query builder for the model's table.
         *
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function newQuery(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::newQuery();
        }
        
        /**
         * Get a new query instance without a given scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return \Illuminate\Database\Eloquent\Builder 
         * @static 
         */
        public static function newQueryWithoutScope($scope){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::newQueryWithoutScope($scope);
        }
        
        /**
         * Get a new query builder that doesn't have any global scopes.
         *
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function newQueryWithoutScopes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::newQueryWithoutScopes();
        }
        
        /**
         * Create a new Eloquent query builder for the model.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function newEloquentBuilder($query){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::newEloquentBuilder($query);
        }
        
        /**
         * Create a new Eloquent Collection instance.
         *
         * @param array $models
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function newCollection($models = array()){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::newCollection($models);
        }
        
        /**
         * Create a new pivot model instance.
         *
         * @param \Illuminate\Database\Eloquent\Model $parent
         * @param array $attributes
         * @param string $table
         * @param bool $exists
         * @return \Illuminate\Database\Eloquent\Relations\Pivot 
         * @static 
         */
        public static function newPivot($parent, $attributes, $table, $exists){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::newPivot($parent, $attributes, $table, $exists);
        }
        
        /**
         * Get the table associated with the model.
         *
         * @return string 
         * @static 
         */
        public static function getTable(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getTable();
        }
        
        /**
         * Set the table associated with the model.
         *
         * @param string $table
         * @return $this 
         * @static 
         */
        public static function setTable($table){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setTable($table);
        }
        
        /**
         * Get the value of the model's primary key.
         *
         * @return mixed 
         * @static 
         */
        public static function getKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getKey();
        }
        
        /**
         * Get the queueable identity for the entity.
         *
         * @return mixed 
         * @static 
         */
        public static function getQueueableId(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getQueueableId();
        }
        
        /**
         * Get the primary key for the model.
         *
         * @return string 
         * @static 
         */
        public static function getKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getKeyName();
        }
        
        /**
         * Set the primary key for the model.
         *
         * @param string $key
         * @return $this 
         * @static 
         */
        public static function setKeyName($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setKeyName($key);
        }
        
        /**
         * Get the table qualified key name.
         *
         * @return string 
         * @static 
         */
        public static function getQualifiedKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getQualifiedKeyName();
        }
        
        /**
         * Get the value of the model's route key.
         *
         * @return mixed 
         * @static 
         */
        public static function getRouteKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getRouteKey();
        }
        
        /**
         * Get the route key for the model.
         *
         * @return string 
         * @static 
         */
        public static function getRouteKeyName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getRouteKeyName();
        }
        
        /**
         * Determine if the model uses timestamps.
         *
         * @return bool 
         * @static 
         */
        public static function usesTimestamps(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::usesTimestamps();
        }
        
        /**
         * Get the class name for polymorphic relations.
         *
         * @return string 
         * @static 
         */
        public static function getMorphClass(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getMorphClass();
        }
        
        /**
         * Get the number of models to return per page.
         *
         * @return int 
         * @static 
         */
        public static function getPerPage(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getPerPage();
        }
        
        /**
         * Set the number of models to return per page.
         *
         * @param int $perPage
         * @return $this 
         * @static 
         */
        public static function setPerPage($perPage){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setPerPage($perPage);
        }
        
        /**
         * Get the default foreign key name for the model.
         *
         * @return string 
         * @static 
         */
        public static function getForeignKey(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getForeignKey();
        }
        
        /**
         * Get the hidden attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getHidden(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getHidden();
        }
        
        /**
         * Set the hidden attributes for the model.
         *
         * @param array $hidden
         * @return $this 
         * @static 
         */
        public static function setHidden($hidden){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setHidden($hidden);
        }
        
        /**
         * Add hidden attributes for the model.
         *
         * @param array|string|null $attributes
         * @return void 
         * @static 
         */
        public static function addHidden($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::addHidden($attributes);
        }
        
        /**
         * Make the given, typically hidden, attributes visible.
         *
         * @param array|string $attributes
         * @return $this 
         * @static 
         */
        public static function makeVisible($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::makeVisible($attributes);
        }
        
        /**
         * Make the given, typically hidden, attributes visible.
         *
         * @param array|string $attributes
         * @return $this 
         * @deprecated since version 5.2. Use the "makeVisible" method directly.
         * @static 
         */
        public static function withHidden($attributes){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::withHidden($attributes);
        }
        
        /**
         * Get the visible attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getVisible(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getVisible();
        }
        
        /**
         * Set the visible attributes for the model.
         *
         * @param array $visible
         * @return $this 
         * @static 
         */
        public static function setVisible($visible){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setVisible($visible);
        }
        
        /**
         * Add visible attributes for the model.
         *
         * @param array|string|null $attributes
         * @return void 
         * @static 
         */
        public static function addVisible($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::addVisible($attributes);
        }
        
        /**
         * Set the accessors to append to model arrays.
         *
         * @param array $appends
         * @return $this 
         * @static 
         */
        public static function setAppends($appends){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setAppends($appends);
        }
        
        /**
         * Get the fillable attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getFillable(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getFillable();
        }
        
        /**
         * Set the fillable attributes for the model.
         *
         * @param array $fillable
         * @return $this 
         * @static 
         */
        public static function fillable($fillable){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::fillable($fillable);
        }
        
        /**
         * Get the guarded attributes for the model.
         *
         * @return array 
         * @static 
         */
        public static function getGuarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getGuarded();
        }
        
        /**
         * Set the guarded attributes for the model.
         *
         * @param array $guarded
         * @return $this 
         * @static 
         */
        public static function guard($guarded){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::guard($guarded);
        }
        
        /**
         * Disable all mass assignable restrictions.
         *
         * @param bool $state
         * @return void 
         * @static 
         */
        public static function unguard($state = true){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::unguard($state);
        }
        
        /**
         * Enable the mass assignment restrictions.
         *
         * @return void 
         * @static 
         */
        public static function reguard(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::reguard();
        }
        
        /**
         * Determine if current state is "unguarded".
         *
         * @return bool 
         * @static 
         */
        public static function isUnguarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::isUnguarded();
        }
        
        /**
         * Run the given callable while being unguarded.
         *
         * @param callable $callback
         * @return mixed 
         * @static 
         */
        public static function unguarded($callback){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::unguarded($callback);
        }
        
        /**
         * Determine if the given attribute may be mass assigned.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function isFillable($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::isFillable($key);
        }
        
        /**
         * Determine if the given key is guarded.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function isGuarded($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::isGuarded($key);
        }
        
        /**
         * Determine if the model is totally guarded.
         *
         * @return bool 
         * @static 
         */
        public static function totallyGuarded(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::totallyGuarded();
        }
        
        /**
         * Get the relationships that are touched on save.
         *
         * @return array 
         * @static 
         */
        public static function getTouchedRelations(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getTouchedRelations();
        }
        
        /**
         * Set the relationships that are touched on save.
         *
         * @param array $touches
         * @return $this 
         * @static 
         */
        public static function setTouchedRelations($touches){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setTouchedRelations($touches);
        }
        
        /**
         * Get the value indicating whether the IDs are incrementing.
         *
         * @return bool 
         * @static 
         */
        public static function getIncrementing(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getIncrementing();
        }
        
        /**
         * Set whether IDs are incrementing.
         *
         * @param bool $value
         * @return $this 
         * @static 
         */
        public static function setIncrementing($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setIncrementing($value);
        }
        
        /**
         * Convert the model instance to JSON.
         *
         * @param int $options
         * @return string 
         * @static 
         */
        public static function toJson($options = 0){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::toJson($options);
        }
        
        /**
         * Convert the object into something JSON serializable.
         *
         * @return array 
         * @static 
         */
        public static function jsonSerialize(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::jsonSerialize();
        }
        
        /**
         * Convert the model instance to an array.
         *
         * @return array 
         * @static 
         */
        public static function toArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::toArray();
        }
        
        /**
         * Convert the model's attributes to an array.
         *
         * @return array 
         * @static 
         */
        public static function attributesToArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::attributesToArray();
        }
        
        /**
         * Get the model's relationships in array form.
         *
         * @return array 
         * @static 
         */
        public static function relationsToArray(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::relationsToArray();
        }
        
        /**
         * Get an attribute from the model.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getAttribute($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getAttribute($key);
        }
        
        /**
         * Get a plain attribute (not a relationship).
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getAttributeValue($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getAttributeValue($key);
        }
        
        /**
         * Get a relationship.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function getRelationValue($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getRelationValue($key);
        }
        
        /**
         * Determine if a get mutator exists for an attribute.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasGetMutator($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::hasGetMutator($key);
        }
        
        /**
         * Determine whether an attribute should be cast to a native type.
         *
         * @param string $key
         * @param array|string|null $types
         * @return bool 
         * @static 
         */
        public static function hasCast($key, $types = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::hasCast($key, $types);
        }
        
        /**
         * Get the casts array.
         *
         * @return array 
         * @static 
         */
        public static function getCasts(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getCasts();
        }
        
        /**
         * Set a given attribute on the model.
         *
         * @param string $key
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setAttribute($key, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setAttribute($key, $value);
        }
        
        /**
         * Determine if a set mutator exists for an attribute.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasSetMutator($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::hasSetMutator($key);
        }
        
        /**
         * Get the attributes that should be converted to dates.
         *
         * @return array 
         * @static 
         */
        public static function getDates(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getDates();
        }
        
        /**
         * Convert a DateTime to a storable string.
         *
         * @param \DateTime|int $value
         * @return string 
         * @static 
         */
        public static function fromDateTime($value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::fromDateTime($value);
        }
        
        /**
         * Set the date format used by the model.
         *
         * @param string $format
         * @return $this 
         * @static 
         */
        public static function setDateFormat($format){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setDateFormat($format);
        }
        
        /**
         * Decode the given JSON back into an array or object.
         *
         * @param string $value
         * @param bool $asObject
         * @return mixed 
         * @static 
         */
        public static function fromJson($value, $asObject = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::fromJson($value, $asObject);
        }
        
        /**
         * Clone the model into a new, non-existing instance.
         *
         * @param array|null $except
         * @return \Illuminate\Database\Eloquent\Model 
         * @static 
         */
        public static function replicate($except = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::replicate($except);
        }
        
        /**
         * Get all of the current attributes on the model.
         *
         * @return array 
         * @static 
         */
        public static function getAttributes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getAttributes();
        }
        
        /**
         * Set the array of model attributes. No checking is done.
         *
         * @param array $attributes
         * @param bool $sync
         * @return $this 
         * @static 
         */
        public static function setRawAttributes($attributes, $sync = false){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setRawAttributes($attributes, $sync);
        }
        
        /**
         * Get the model's original attribute values.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed|array 
         * @static 
         */
        public static function getOriginal($key = null, $default = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getOriginal($key, $default);
        }
        
        /**
         * Sync the original attributes with the current.
         *
         * @return $this 
         * @static 
         */
        public static function syncOriginal(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::syncOriginal();
        }
        
        /**
         * Sync a single original attribute with its current value.
         *
         * @param string $attribute
         * @return $this 
         * @static 
         */
        public static function syncOriginalAttribute($attribute){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::syncOriginalAttribute($attribute);
        }
        
        /**
         * Determine if the model or given attribute(s) have been modified.
         *
         * @param array|string|null $attributes
         * @return bool 
         * @static 
         */
        public static function isDirty($attributes = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::isDirty($attributes);
        }
        
        /**
         * Get the attributes that have been changed since last sync.
         *
         * @return array 
         * @static 
         */
        public static function getDirty(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getDirty();
        }
        
        /**
         * Get all the loaded relations for the instance.
         *
         * @return array 
         * @static 
         */
        public static function getRelations(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getRelations();
        }
        
        /**
         * Get a specified relationship.
         *
         * @param string $relation
         * @return mixed 
         * @static 
         */
        public static function getRelation($relation){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getRelation($relation);
        }
        
        /**
         * Determine if the given relation is loaded.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function relationLoaded($key){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::relationLoaded($key);
        }
        
        /**
         * Set the specific relationship in the model.
         *
         * @param string $relation
         * @param mixed $value
         * @return $this 
         * @static 
         */
        public static function setRelation($relation, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setRelation($relation, $value);
        }
        
        /**
         * Set the entire relations array on the model.
         *
         * @param array $relations
         * @return $this 
         * @static 
         */
        public static function setRelations($relations){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setRelations($relations);
        }
        
        /**
         * Get the database connection for the model.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function getConnection(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getConnection();
        }
        
        /**
         * Get the current connection name for the model.
         *
         * @return string 
         * @static 
         */
        public static function getConnectionName(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getConnectionName();
        }
        
        /**
         * Set the connection associated with the model.
         *
         * @param string $name
         * @return $this 
         * @static 
         */
        public static function setConnection($name){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::setConnection($name);
        }
        
        /**
         * Resolve a connection instance.
         *
         * @param string|null $connection
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function resolveConnection($connection = null){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::resolveConnection($connection);
        }
        
        /**
         * Get the connection resolver instance.
         *
         * @return \Illuminate\Database\ConnectionResolverInterface 
         * @static 
         */
        public static function getConnectionResolver(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getConnectionResolver();
        }
        
        /**
         * Set the connection resolver instance.
         *
         * @param \Illuminate\Database\ConnectionResolverInterface $resolver
         * @return void 
         * @static 
         */
        public static function setConnectionResolver($resolver){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::setConnectionResolver($resolver);
        }
        
        /**
         * Unset the connection resolver for models.
         *
         * @return void 
         * @static 
         */
        public static function unsetConnectionResolver(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::unsetConnectionResolver();
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */
        public static function getEventDispatcher(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
         * @return void 
         * @static 
         */
        public static function setEventDispatcher($dispatcher){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::setEventDispatcher($dispatcher);
        }
        
        /**
         * Unset the event dispatcher for models.
         *
         * @return void 
         * @static 
         */
        public static function unsetEventDispatcher(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::unsetEventDispatcher();
        }
        
        /**
         * Get the mutated attributes for a given instance.
         *
         * @return array 
         * @static 
         */
        public static function getMutatedAttributes(){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::getMutatedAttributes();
        }
        
        /**
         * Extract and cache all the mutated attributes of a class.
         *
         * @param string $class
         * @return void 
         * @static 
         */
        public static function cacheMutatedAttributes($class){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::cacheMutatedAttributes($class);
        }
        
        /**
         * Determine if the given attribute exists.
         *
         * @param mixed $offset
         * @return bool 
         * @static 
         */
        public static function offsetExists($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::offsetExists($offset);
        }
        
        /**
         * Get the value for a given offset.
         *
         * @param mixed $offset
         * @return mixed 
         * @static 
         */
        public static function offsetGet($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            return \Kordy\Ticketit\Models\TicketitComment::offsetGet($offset);
        }
        
        /**
         * Set the value for a given offset.
         *
         * @param mixed $offset
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($offset, $value){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::offsetSet($offset, $value);
        }
        
        /**
         * Unset the value for a given offset.
         *
         * @param mixed $offset
         * @return void 
         * @static 
         */
        public static function offsetUnset($offset){
            //Method inherited from \Illuminate\Database\Eloquent\Model            
            \Kordy\Ticketit\Models\TicketitComment::offsetUnset($offset);
        }
        
        /**
         * Ticket this comment belongs to
         *
         * @return \Kordy\Ticketit\Models\BelongsTo 
         * @static 
         */
        public static function ticket(){
            return \Kordy\Ticketit\Models\TicketitComment::ticket();
        }
        
        /**
         * The owner of this comment
         *
         * @return \Kordy\Ticketit\Models\MorphTo 
         * @static 
         */
        public static function commentable(){
            return \Kordy\Ticketit\Models\TicketitComment::commentable();
        }
        
    }


}

