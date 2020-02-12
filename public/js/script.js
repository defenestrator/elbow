/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/svelte/index.mjs":
/*!***************************************!*\
  !*** ./node_modules/svelte/index.mjs ***!
  \***************************************/
/*! exports provided: SvelteComponent, afterUpdate, beforeUpdate, createEventDispatcher, getContext, onDestroy, onMount, setContext, tick */
/***/ (function(__webpack_module__, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _internal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./internal */ "./node_modules/svelte/internal/index.mjs");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "SvelteComponent", function() { return _internal__WEBPACK_IMPORTED_MODULE_0__["SvelteComponentDev"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "afterUpdate", function() { return _internal__WEBPACK_IMPORTED_MODULE_0__["afterUpdate"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "beforeUpdate", function() { return _internal__WEBPACK_IMPORTED_MODULE_0__["beforeUpdate"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "createEventDispatcher", function() { return _internal__WEBPACK_IMPORTED_MODULE_0__["createEventDispatcher"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "getContext", function() { return _internal__WEBPACK_IMPORTED_MODULE_0__["getContext"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "onDestroy", function() { return _internal__WEBPACK_IMPORTED_MODULE_0__["onDestroy"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "onMount", function() { return _internal__WEBPACK_IMPORTED_MODULE_0__["onMount"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "setContext", function() { return _internal__WEBPACK_IMPORTED_MODULE_0__["setContext"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "tick", function() { return _internal__WEBPACK_IMPORTED_MODULE_0__["tick"]; });




/***/ }),

/***/ "./node_modules/svelte/internal/index.mjs":
/*!************************************************!*\
  !*** ./node_modules/svelte/internal/index.mjs ***!
  \************************************************/
/*! exports provided: HtmlTag, SvelteComponent, SvelteComponentDev, SvelteElement, action_destroyer, add_attribute, add_classes, add_flush_callback, add_location, add_render_callback, add_resize_listener, add_transform, afterUpdate, append, append_dev, assign, attr, attr_dev, beforeUpdate, bind, binding_callbacks, blank_object, bubble, check_outros, children, claim_component, claim_element, claim_space, claim_text, clear_loops, component_subscribe, createEventDispatcher, create_animation, create_bidirectional_transition, create_component, create_in_transition, create_out_transition, create_slot, create_ssr_component, current_component, custom_event, dataset_dev, debug, destroy_block, destroy_component, destroy_each, detach, detach_after_dev, detach_before_dev, detach_between_dev, detach_dev, dirty_components, dispatch_dev, each, element, element_is, empty, escape, escaped, exclude_internal_props, fix_and_destroy_block, fix_and_outro_and_destroy_block, fix_position, flush, getContext, get_binding_group_value, get_current_component, get_slot_changes, get_slot_context, get_spread_object, get_spread_update, get_store_value, globals, group_outros, handle_promise, has_prop, identity, init, insert, insert_dev, intros, invalid_attribute_name_character, is_client, is_function, is_promise, listen, listen_dev, loop, loop_guard, missing_component, mount_component, noop, not_equal, now, null_to_empty, object_without_properties, onDestroy, onMount, once, outro_and_destroy_block, prevent_default, prop_dev, query_selector_all, raf, run, run_all, safe_not_equal, schedule_update, select_multiple_value, select_option, select_options, select_value, self, setContext, set_attributes, set_current_component, set_custom_element_data, set_data, set_data_dev, set_input_type, set_input_value, set_now, set_raf, set_store_value, set_style, set_svg_attributes, space, spread, stop_propagation, subscribe, svg_element, text, tick, time_ranges_to_array, to_number, toggle_class, transition_in, transition_out, update_keyed_each, validate_component, validate_each_keys, validate_store, xlink_attr */
/***/ (function(__webpack_module__, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "HtmlTag", function() { return HtmlTag; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SvelteComponent", function() { return SvelteComponent; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SvelteComponentDev", function() { return SvelteComponentDev; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SvelteElement", function() { return SvelteElement; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "action_destroyer", function() { return action_destroyer; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "add_attribute", function() { return add_attribute; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "add_classes", function() { return add_classes; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "add_flush_callback", function() { return add_flush_callback; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "add_location", function() { return add_location; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "add_render_callback", function() { return add_render_callback; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "add_resize_listener", function() { return add_resize_listener; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "add_transform", function() { return add_transform; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "afterUpdate", function() { return afterUpdate; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "append", function() { return append; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "append_dev", function() { return append_dev; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "assign", function() { return assign; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "attr", function() { return attr; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "attr_dev", function() { return attr_dev; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "beforeUpdate", function() { return beforeUpdate; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "bind", function() { return bind; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "binding_callbacks", function() { return binding_callbacks; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "blank_object", function() { return blank_object; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "bubble", function() { return bubble; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "check_outros", function() { return check_outros; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "children", function() { return children; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "claim_component", function() { return claim_component; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "claim_element", function() { return claim_element; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "claim_space", function() { return claim_space; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "claim_text", function() { return claim_text; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "clear_loops", function() { return clear_loops; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "component_subscribe", function() { return component_subscribe; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "createEventDispatcher", function() { return createEventDispatcher; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "create_animation", function() { return create_animation; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "create_bidirectional_transition", function() { return create_bidirectional_transition; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "create_component", function() { return create_component; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "create_in_transition", function() { return create_in_transition; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "create_out_transition", function() { return create_out_transition; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "create_slot", function() { return create_slot; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "create_ssr_component", function() { return create_ssr_component; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "current_component", function() { return current_component; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "custom_event", function() { return custom_event; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "dataset_dev", function() { return dataset_dev; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "debug", function() { return debug; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "destroy_block", function() { return destroy_block; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "destroy_component", function() { return destroy_component; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "destroy_each", function() { return destroy_each; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "detach", function() { return detach; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "detach_after_dev", function() { return detach_after_dev; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "detach_before_dev", function() { return detach_before_dev; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "detach_between_dev", function() { return detach_between_dev; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "detach_dev", function() { return detach_dev; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "dirty_components", function() { return dirty_components; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "dispatch_dev", function() { return dispatch_dev; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "each", function() { return each; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "element", function() { return element; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "element_is", function() { return element_is; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "empty", function() { return empty; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "escape", function() { return escape; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "escaped", function() { return escaped; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "exclude_internal_props", function() { return exclude_internal_props; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "fix_and_destroy_block", function() { return fix_and_destroy_block; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "fix_and_outro_and_destroy_block", function() { return fix_and_outro_and_destroy_block; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "fix_position", function() { return fix_position; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "flush", function() { return flush; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getContext", function() { return getContext; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "get_binding_group_value", function() { return get_binding_group_value; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "get_current_component", function() { return get_current_component; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "get_slot_changes", function() { return get_slot_changes; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "get_slot_context", function() { return get_slot_context; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "get_spread_object", function() { return get_spread_object; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "get_spread_update", function() { return get_spread_update; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "get_store_value", function() { return get_store_value; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "globals", function() { return globals; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "group_outros", function() { return group_outros; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "handle_promise", function() { return handle_promise; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "has_prop", function() { return has_prop; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "identity", function() { return identity; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "init", function() { return init; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "insert", function() { return insert; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "insert_dev", function() { return insert_dev; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "intros", function() { return intros; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "invalid_attribute_name_character", function() { return invalid_attribute_name_character; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "is_client", function() { return is_client; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "is_function", function() { return is_function; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "is_promise", function() { return is_promise; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "listen", function() { return listen; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "listen_dev", function() { return listen_dev; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "loop", function() { return loop; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "loop_guard", function() { return loop_guard; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "missing_component", function() { return missing_component; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "mount_component", function() { return mount_component; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "noop", function() { return noop; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "not_equal", function() { return not_equal; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "now", function() { return now; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "null_to_empty", function() { return null_to_empty; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "object_without_properties", function() { return object_without_properties; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "onDestroy", function() { return onDestroy; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "onMount", function() { return onMount; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "once", function() { return once; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "outro_and_destroy_block", function() { return outro_and_destroy_block; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "prevent_default", function() { return prevent_default; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "prop_dev", function() { return prop_dev; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "query_selector_all", function() { return query_selector_all; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "raf", function() { return raf; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "run", function() { return run; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "run_all", function() { return run_all; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "safe_not_equal", function() { return safe_not_equal; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "schedule_update", function() { return schedule_update; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "select_multiple_value", function() { return select_multiple_value; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "select_option", function() { return select_option; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "select_options", function() { return select_options; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "select_value", function() { return select_value; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "self", function() { return self; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setContext", function() { return setContext; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "set_attributes", function() { return set_attributes; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "set_current_component", function() { return set_current_component; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "set_custom_element_data", function() { return set_custom_element_data; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "set_data", function() { return set_data; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "set_data_dev", function() { return set_data_dev; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "set_input_type", function() { return set_input_type; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "set_input_value", function() { return set_input_value; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "set_now", function() { return set_now; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "set_raf", function() { return set_raf; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "set_store_value", function() { return set_store_value; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "set_style", function() { return set_style; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "set_svg_attributes", function() { return set_svg_attributes; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "space", function() { return space; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "spread", function() { return spread; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "stop_propagation", function() { return stop_propagation; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "subscribe", function() { return subscribe; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "svg_element", function() { return svg_element; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "text", function() { return text; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "tick", function() { return tick; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "time_ranges_to_array", function() { return time_ranges_to_array; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "to_number", function() { return to_number; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "toggle_class", function() { return toggle_class; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "transition_in", function() { return transition_in; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "transition_out", function() { return transition_out; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "update_keyed_each", function() { return update_keyed_each; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "validate_component", function() { return validate_component; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "validate_each_keys", function() { return validate_each_keys; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "validate_store", function() { return validate_store; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "xlink_attr", function() { return xlink_attr; });
function noop() { }
const identity = x => x;
function assign(tar, src) {
    // @ts-ignore
    for (const k in src)
        tar[k] = src[k];
    return tar;
}
function is_promise(value) {
    return value && typeof value === 'object' && typeof value.then === 'function';
}
function add_location(element, file, line, column, char) {
    element.__svelte_meta = {
        loc: { file, line, column, char }
    };
}
function run(fn) {
    return fn();
}
function blank_object() {
    return Object.create(null);
}
function run_all(fns) {
    fns.forEach(run);
}
function is_function(thing) {
    return typeof thing === 'function';
}
function safe_not_equal(a, b) {
    return a != a ? b == b : a !== b || ((a && typeof a === 'object') || typeof a === 'function');
}
function not_equal(a, b) {
    return a != a ? b == b : a !== b;
}
function validate_store(store, name) {
    if (store != null && typeof store.subscribe !== 'function') {
        throw new Error(`'${name}' is not a store with a 'subscribe' method`);
    }
}
function subscribe(store, ...callbacks) {
    if (store == null) {
        return noop;
    }
    const unsub = store.subscribe(...callbacks);
    return unsub.unsubscribe ? () => unsub.unsubscribe() : unsub;
}
function get_store_value(store) {
    let value;
    subscribe(store, _ => value = _)();
    return value;
}
function component_subscribe(component, store, callback) {
    component.$$.on_destroy.push(subscribe(store, callback));
}
function create_slot(definition, ctx, $$scope, fn) {
    if (definition) {
        const slot_ctx = get_slot_context(definition, ctx, $$scope, fn);
        return definition[0](slot_ctx);
    }
}
function get_slot_context(definition, ctx, $$scope, fn) {
    return definition[1] && fn
        ? assign($$scope.ctx.slice(), definition[1](fn(ctx)))
        : $$scope.ctx;
}
function get_slot_changes(definition, $$scope, dirty, fn) {
    if (definition[2] && fn) {
        const lets = definition[2](fn(dirty));
        if (typeof $$scope.dirty === 'object') {
            const merged = [];
            const len = Math.max($$scope.dirty.length, lets.length);
            for (let i = 0; i < len; i += 1) {
                merged[i] = $$scope.dirty[i] | lets[i];
            }
            return merged;
        }
        return $$scope.dirty | lets;
    }
    return $$scope.dirty;
}
function exclude_internal_props(props) {
    const result = {};
    for (const k in props)
        if (k[0] !== '$')
            result[k] = props[k];
    return result;
}
function once(fn) {
    let ran = false;
    return function (...args) {
        if (ran)
            return;
        ran = true;
        fn.call(this, ...args);
    };
}
function null_to_empty(value) {
    return value == null ? '' : value;
}
function set_store_value(store, ret, value = ret) {
    store.set(value);
    return ret;
}
const has_prop = (obj, prop) => Object.prototype.hasOwnProperty.call(obj, prop);
function action_destroyer(action_result) {
    return action_result && is_function(action_result.destroy) ? action_result.destroy : noop;
}

const is_client = typeof window !== 'undefined';
let now = is_client
    ? () => window.performance.now()
    : () => Date.now();
let raf = is_client ? cb => requestAnimationFrame(cb) : noop;
// used internally for testing
function set_now(fn) {
    now = fn;
}
function set_raf(fn) {
    raf = fn;
}

const tasks = new Set();
function run_tasks(now) {
    tasks.forEach(task => {
        if (!task.c(now)) {
            tasks.delete(task);
            task.f();
        }
    });
    if (tasks.size !== 0)
        raf(run_tasks);
}
/**
 * For testing purposes only!
 */
function clear_loops() {
    tasks.clear();
}
/**
 * Creates a new task that runs on each raf frame
 * until it returns a falsy value or is aborted
 */
function loop(callback) {
    let task;
    if (tasks.size === 0)
        raf(run_tasks);
    return {
        promise: new Promise(fulfill => {
            tasks.add(task = { c: callback, f: fulfill });
        }),
        abort() {
            tasks.delete(task);
        }
    };
}

function append(target, node) {
    target.appendChild(node);
}
function insert(target, node, anchor) {
    target.insertBefore(node, anchor || null);
}
function detach(node) {
    node.parentNode.removeChild(node);
}
function destroy_each(iterations, detaching) {
    for (let i = 0; i < iterations.length; i += 1) {
        if (iterations[i])
            iterations[i].d(detaching);
    }
}
function element(name) {
    return document.createElement(name);
}
function element_is(name, is) {
    return document.createElement(name, { is });
}
function object_without_properties(obj, exclude) {
    const target = {};
    for (const k in obj) {
        if (has_prop(obj, k)
            // @ts-ignore
            && exclude.indexOf(k) === -1) {
            // @ts-ignore
            target[k] = obj[k];
        }
    }
    return target;
}
function svg_element(name) {
    return document.createElementNS('http://www.w3.org/2000/svg', name);
}
function text(data) {
    return document.createTextNode(data);
}
function space() {
    return text(' ');
}
function empty() {
    return text('');
}
function listen(node, event, handler, options) {
    node.addEventListener(event, handler, options);
    return () => node.removeEventListener(event, handler, options);
}
function prevent_default(fn) {
    return function (event) {
        event.preventDefault();
        // @ts-ignore
        return fn.call(this, event);
    };
}
function stop_propagation(fn) {
    return function (event) {
        event.stopPropagation();
        // @ts-ignore
        return fn.call(this, event);
    };
}
function self(fn) {
    return function (event) {
        // @ts-ignore
        if (event.target === this)
            fn.call(this, event);
    };
}
function attr(node, attribute, value) {
    if (value == null)
        node.removeAttribute(attribute);
    else if (node.getAttribute(attribute) !== value)
        node.setAttribute(attribute, value);
}
function set_attributes(node, attributes) {
    // @ts-ignore
    const descriptors = Object.getOwnPropertyDescriptors(node.__proto__);
    for (const key in attributes) {
        if (attributes[key] == null) {
            node.removeAttribute(key);
        }
        else if (key === 'style') {
            node.style.cssText = attributes[key];
        }
        else if (descriptors[key] && descriptors[key].set) {
            node[key] = attributes[key];
        }
        else {
            attr(node, key, attributes[key]);
        }
    }
}
function set_svg_attributes(node, attributes) {
    for (const key in attributes) {
        attr(node, key, attributes[key]);
    }
}
function set_custom_element_data(node, prop, value) {
    if (prop in node) {
        node[prop] = value;
    }
    else {
        attr(node, prop, value);
    }
}
function xlink_attr(node, attribute, value) {
    node.setAttributeNS('http://www.w3.org/1999/xlink', attribute, value);
}
function get_binding_group_value(group) {
    const value = [];
    for (let i = 0; i < group.length; i += 1) {
        if (group[i].checked)
            value.push(group[i].__value);
    }
    return value;
}
function to_number(value) {
    return value === '' ? undefined : +value;
}
function time_ranges_to_array(ranges) {
    const array = [];
    for (let i = 0; i < ranges.length; i += 1) {
        array.push({ start: ranges.start(i), end: ranges.end(i) });
    }
    return array;
}
function children(element) {
    return Array.from(element.childNodes);
}
function claim_element(nodes, name, attributes, svg) {
    for (let i = 0; i < nodes.length; i += 1) {
        const node = nodes[i];
        if (node.nodeName === name) {
            let j = 0;
            while (j < node.attributes.length) {
                const attribute = node.attributes[j];
                if (attributes[attribute.name]) {
                    j++;
                }
                else {
                    node.removeAttribute(attribute.name);
                }
            }
            return nodes.splice(i, 1)[0];
        }
    }
    return svg ? svg_element(name) : element(name);
}
function claim_text(nodes, data) {
    for (let i = 0; i < nodes.length; i += 1) {
        const node = nodes[i];
        if (node.nodeType === 3) {
            node.data = '' + data;
            return nodes.splice(i, 1)[0];
        }
    }
    return text(data);
}
function claim_space(nodes) {
    return claim_text(nodes, ' ');
}
function set_data(text, data) {
    data = '' + data;
    if (text.data !== data)
        text.data = data;
}
function set_input_value(input, value) {
    if (value != null || input.value) {
        input.value = value;
    }
}
function set_input_type(input, type) {
    try {
        input.type = type;
    }
    catch (e) {
        // do nothing
    }
}
function set_style(node, key, value, important) {
    node.style.setProperty(key, value, important ? 'important' : '');
}
function select_option(select, value) {
    for (let i = 0; i < select.options.length; i += 1) {
        const option = select.options[i];
        if (option.__value === value) {
            option.selected = true;
            return;
        }
    }
}
function select_options(select, value) {
    for (let i = 0; i < select.options.length; i += 1) {
        const option = select.options[i];
        option.selected = ~value.indexOf(option.__value);
    }
}
function select_value(select) {
    const selected_option = select.querySelector(':checked') || select.options[0];
    return selected_option && selected_option.__value;
}
function select_multiple_value(select) {
    return [].map.call(select.querySelectorAll(':checked'), option => option.__value);
}
function add_resize_listener(element, fn) {
    if (getComputedStyle(element).position === 'static') {
        element.style.position = 'relative';
    }
    const object = document.createElement('object');
    object.setAttribute('style', 'display: block; position: absolute; top: 0; left: 0; height: 100%; width: 100%; overflow: hidden; pointer-events: none; z-index: -1;');
    object.setAttribute('aria-hidden', 'true');
    object.type = 'text/html';
    object.tabIndex = -1;
    let win;
    object.onload = () => {
        win = object.contentDocument.defaultView;
        win.addEventListener('resize', fn);
    };
    if (/Trident/.test(navigator.userAgent)) {
        element.appendChild(object);
        object.data = 'about:blank';
    }
    else {
        object.data = 'about:blank';
        element.appendChild(object);
    }
    return {
        cancel: () => {
            win && win.removeEventListener && win.removeEventListener('resize', fn);
            element.removeChild(object);
        }
    };
}
function toggle_class(element, name, toggle) {
    element.classList[toggle ? 'add' : 'remove'](name);
}
function custom_event(type, detail) {
    const e = document.createEvent('CustomEvent');
    e.initCustomEvent(type, false, false, detail);
    return e;
}
function query_selector_all(selector, parent = document.body) {
    return Array.from(parent.querySelectorAll(selector));
}
class HtmlTag {
    constructor(html, anchor = null) {
        this.e = element('div');
        this.a = anchor;
        this.u(html);
    }
    m(target, anchor = null) {
        for (let i = 0; i < this.n.length; i += 1) {
            insert(target, this.n[i], anchor);
        }
        this.t = target;
    }
    u(html) {
        this.e.innerHTML = html;
        this.n = Array.from(this.e.childNodes);
    }
    p(html) {
        this.d();
        this.u(html);
        this.m(this.t, this.a);
    }
    d() {
        this.n.forEach(detach);
    }
}

let stylesheet;
let active = 0;
let current_rules = {};
// https://github.com/darkskyapp/string-hash/blob/master/index.js
function hash(str) {
    let hash = 5381;
    let i = str.length;
    while (i--)
        hash = ((hash << 5) - hash) ^ str.charCodeAt(i);
    return hash >>> 0;
}
function create_rule(node, a, b, duration, delay, ease, fn, uid = 0) {
    const step = 16.666 / duration;
    let keyframes = '{\n';
    for (let p = 0; p <= 1; p += step) {
        const t = a + (b - a) * ease(p);
        keyframes += p * 100 + `%{${fn(t, 1 - t)}}\n`;
    }
    const rule = keyframes + `100% {${fn(b, 1 - b)}}\n}`;
    const name = `__svelte_${hash(rule)}_${uid}`;
    if (!current_rules[name]) {
        if (!stylesheet) {
            const style = element('style');
            document.head.appendChild(style);
            stylesheet = style.sheet;
        }
        current_rules[name] = true;
        stylesheet.insertRule(`@keyframes ${name} ${rule}`, stylesheet.cssRules.length);
    }
    const animation = node.style.animation || '';
    node.style.animation = `${animation ? `${animation}, ` : ``}${name} ${duration}ms linear ${delay}ms 1 both`;
    active += 1;
    return name;
}
function delete_rule(node, name) {
    node.style.animation = (node.style.animation || '')
        .split(', ')
        .filter(name
        ? anim => anim.indexOf(name) < 0 // remove specific animation
        : anim => anim.indexOf('__svelte') === -1 // remove all Svelte animations
    )
        .join(', ');
    if (name && !--active)
        clear_rules();
}
function clear_rules() {
    raf(() => {
        if (active)
            return;
        let i = stylesheet.cssRules.length;
        while (i--)
            stylesheet.deleteRule(i);
        current_rules = {};
    });
}

function create_animation(node, from, fn, params) {
    if (!from)
        return noop;
    const to = node.getBoundingClientRect();
    if (from.left === to.left && from.right === to.right && from.top === to.top && from.bottom === to.bottom)
        return noop;
    const { delay = 0, duration = 300, easing = identity, 
    // @ts-ignore todo: should this be separated from destructuring? Or start/end added to public api and documentation?
    start: start_time = now() + delay, 
    // @ts-ignore todo:
    end = start_time + duration, tick = noop, css } = fn(node, { from, to }, params);
    let running = true;
    let started = false;
    let name;
    function start() {
        if (css) {
            name = create_rule(node, 0, 1, duration, delay, easing, css);
        }
        if (!delay) {
            started = true;
        }
    }
    function stop() {
        if (css)
            delete_rule(node, name);
        running = false;
    }
    loop(now => {
        if (!started && now >= start_time) {
            started = true;
        }
        if (started && now >= end) {
            tick(1, 0);
            stop();
        }
        if (!running) {
            return false;
        }
        if (started) {
            const p = now - start_time;
            const t = 0 + 1 * easing(p / duration);
            tick(t, 1 - t);
        }
        return true;
    });
    start();
    tick(0, 1);
    return stop;
}
function fix_position(node) {
    const style = getComputedStyle(node);
    if (style.position !== 'absolute' && style.position !== 'fixed') {
        const { width, height } = style;
        const a = node.getBoundingClientRect();
        node.style.position = 'absolute';
        node.style.width = width;
        node.style.height = height;
        add_transform(node, a);
    }
}
function add_transform(node, a) {
    const b = node.getBoundingClientRect();
    if (a.left !== b.left || a.top !== b.top) {
        const style = getComputedStyle(node);
        const transform = style.transform === 'none' ? '' : style.transform;
        node.style.transform = `${transform} translate(${a.left - b.left}px, ${a.top - b.top}px)`;
    }
}

let current_component;
function set_current_component(component) {
    current_component = component;
}
function get_current_component() {
    if (!current_component)
        throw new Error(`Function called outside component initialization`);
    return current_component;
}
function beforeUpdate(fn) {
    get_current_component().$$.before_update.push(fn);
}
function onMount(fn) {
    get_current_component().$$.on_mount.push(fn);
}
function afterUpdate(fn) {
    get_current_component().$$.after_update.push(fn);
}
function onDestroy(fn) {
    get_current_component().$$.on_destroy.push(fn);
}
function createEventDispatcher() {
    const component = get_current_component();
    return (type, detail) => {
        const callbacks = component.$$.callbacks[type];
        if (callbacks) {
            // TODO are there situations where events could be dispatched
            // in a server (non-DOM) environment?
            const event = custom_event(type, detail);
            callbacks.slice().forEach(fn => {
                fn.call(component, event);
            });
        }
    };
}
function setContext(key, context) {
    get_current_component().$$.context.set(key, context);
}
function getContext(key) {
    return get_current_component().$$.context.get(key);
}
// TODO figure out if we still want to support
// shorthand events, or if we want to implement
// a real bubbling mechanism
function bubble(component, event) {
    const callbacks = component.$$.callbacks[event.type];
    if (callbacks) {
        callbacks.slice().forEach(fn => fn(event));
    }
}

const dirty_components = [];
const intros = { enabled: false };
const binding_callbacks = [];
const render_callbacks = [];
const flush_callbacks = [];
const resolved_promise = Promise.resolve();
let update_scheduled = false;
function schedule_update() {
    if (!update_scheduled) {
        update_scheduled = true;
        resolved_promise.then(flush);
    }
}
function tick() {
    schedule_update();
    return resolved_promise;
}
function add_render_callback(fn) {
    render_callbacks.push(fn);
}
function add_flush_callback(fn) {
    flush_callbacks.push(fn);
}
const seen_callbacks = new Set();
function flush() {
    do {
        // first, call beforeUpdate functions
        // and update components
        while (dirty_components.length) {
            const component = dirty_components.shift();
            set_current_component(component);
            update(component.$$);
        }
        while (binding_callbacks.length)
            binding_callbacks.pop()();
        // then, once components are updated, call
        // afterUpdate functions. This may cause
        // subsequent updates...
        for (let i = 0; i < render_callbacks.length; i += 1) {
            const callback = render_callbacks[i];
            if (!seen_callbacks.has(callback)) {
                // ...so guard against infinite loops
                seen_callbacks.add(callback);
                callback();
            }
        }
        render_callbacks.length = 0;
    } while (dirty_components.length);
    while (flush_callbacks.length) {
        flush_callbacks.pop()();
    }
    update_scheduled = false;
    seen_callbacks.clear();
}
function update($$) {
    if ($$.fragment !== null) {
        $$.update();
        run_all($$.before_update);
        const dirty = $$.dirty;
        $$.dirty = [-1];
        $$.fragment && $$.fragment.p($$.ctx, dirty);
        $$.after_update.forEach(add_render_callback);
    }
}

let promise;
function wait() {
    if (!promise) {
        promise = Promise.resolve();
        promise.then(() => {
            promise = null;
        });
    }
    return promise;
}
function dispatch(node, direction, kind) {
    node.dispatchEvent(custom_event(`${direction ? 'intro' : 'outro'}${kind}`));
}
const outroing = new Set();
let outros;
function group_outros() {
    outros = {
        r: 0,
        c: [],
        p: outros // parent group
    };
}
function check_outros() {
    if (!outros.r) {
        run_all(outros.c);
    }
    outros = outros.p;
}
function transition_in(block, local) {
    if (block && block.i) {
        outroing.delete(block);
        block.i(local);
    }
}
function transition_out(block, local, detach, callback) {
    if (block && block.o) {
        if (outroing.has(block))
            return;
        outroing.add(block);
        outros.c.push(() => {
            outroing.delete(block);
            if (callback) {
                if (detach)
                    block.d(1);
                callback();
            }
        });
        block.o(local);
    }
}
const null_transition = { duration: 0 };
function create_in_transition(node, fn, params) {
    let config = fn(node, params);
    let running = false;
    let animation_name;
    let task;
    let uid = 0;
    function cleanup() {
        if (animation_name)
            delete_rule(node, animation_name);
    }
    function go() {
        const { delay = 0, duration = 300, easing = identity, tick = noop, css } = config || null_transition;
        if (css)
            animation_name = create_rule(node, 0, 1, duration, delay, easing, css, uid++);
        tick(0, 1);
        const start_time = now() + delay;
        const end_time = start_time + duration;
        if (task)
            task.abort();
        running = true;
        add_render_callback(() => dispatch(node, true, 'start'));
        task = loop(now => {
            if (running) {
                if (now >= end_time) {
                    tick(1, 0);
                    dispatch(node, true, 'end');
                    cleanup();
                    return running = false;
                }
                if (now >= start_time) {
                    const t = easing((now - start_time) / duration);
                    tick(t, 1 - t);
                }
            }
            return running;
        });
    }
    let started = false;
    return {
        start() {
            if (started)
                return;
            delete_rule(node);
            if (is_function(config)) {
                config = config();
                wait().then(go);
            }
            else {
                go();
            }
        },
        invalidate() {
            started = false;
        },
        end() {
            if (running) {
                cleanup();
                running = false;
            }
        }
    };
}
function create_out_transition(node, fn, params) {
    let config = fn(node, params);
    let running = true;
    let animation_name;
    const group = outros;
    group.r += 1;
    function go() {
        const { delay = 0, duration = 300, easing = identity, tick = noop, css } = config || null_transition;
        if (css)
            animation_name = create_rule(node, 1, 0, duration, delay, easing, css);
        const start_time = now() + delay;
        const end_time = start_time + duration;
        add_render_callback(() => dispatch(node, false, 'start'));
        loop(now => {
            if (running) {
                if (now >= end_time) {
                    tick(0, 1);
                    dispatch(node, false, 'end');
                    if (!--group.r) {
                        // this will result in `end()` being called,
                        // so we don't need to clean up here
                        run_all(group.c);
                    }
                    return false;
                }
                if (now >= start_time) {
                    const t = easing((now - start_time) / duration);
                    tick(1 - t, t);
                }
            }
            return running;
        });
    }
    if (is_function(config)) {
        wait().then(() => {
            // @ts-ignore
            config = config();
            go();
        });
    }
    else {
        go();
    }
    return {
        end(reset) {
            if (reset && config.tick) {
                config.tick(1, 0);
            }
            if (running) {
                if (animation_name)
                    delete_rule(node, animation_name);
                running = false;
            }
        }
    };
}
function create_bidirectional_transition(node, fn, params, intro) {
    let config = fn(node, params);
    let t = intro ? 0 : 1;
    let running_program = null;
    let pending_program = null;
    let animation_name = null;
    function clear_animation() {
        if (animation_name)
            delete_rule(node, animation_name);
    }
    function init(program, duration) {
        const d = program.b - t;
        duration *= Math.abs(d);
        return {
            a: t,
            b: program.b,
            d,
            duration,
            start: program.start,
            end: program.start + duration,
            group: program.group
        };
    }
    function go(b) {
        const { delay = 0, duration = 300, easing = identity, tick = noop, css } = config || null_transition;
        const program = {
            start: now() + delay,
            b
        };
        if (!b) {
            // @ts-ignore todo: improve typings
            program.group = outros;
            outros.r += 1;
        }
        if (running_program) {
            pending_program = program;
        }
        else {
            // if this is an intro, and there's a delay, we need to do
            // an initial tick and/or apply CSS animation immediately
            if (css) {
                clear_animation();
                animation_name = create_rule(node, t, b, duration, delay, easing, css);
            }
            if (b)
                tick(0, 1);
            running_program = init(program, duration);
            add_render_callback(() => dispatch(node, b, 'start'));
            loop(now => {
                if (pending_program && now > pending_program.start) {
                    running_program = init(pending_program, duration);
                    pending_program = null;
                    dispatch(node, running_program.b, 'start');
                    if (css) {
                        clear_animation();
                        animation_name = create_rule(node, t, running_program.b, running_program.duration, 0, easing, config.css);
                    }
                }
                if (running_program) {
                    if (now >= running_program.end) {
                        tick(t = running_program.b, 1 - t);
                        dispatch(node, running_program.b, 'end');
                        if (!pending_program) {
                            // we're done
                            if (running_program.b) {
                                // intro — we can tidy up immediately
                                clear_animation();
                            }
                            else {
                                // outro — needs to be coordinated
                                if (!--running_program.group.r)
                                    run_all(running_program.group.c);
                            }
                        }
                        running_program = null;
                    }
                    else if (now >= running_program.start) {
                        const p = now - running_program.start;
                        t = running_program.a + running_program.d * easing(p / running_program.duration);
                        tick(t, 1 - t);
                    }
                }
                return !!(running_program || pending_program);
            });
        }
    }
    return {
        run(b) {
            if (is_function(config)) {
                wait().then(() => {
                    // @ts-ignore
                    config = config();
                    go(b);
                });
            }
            else {
                go(b);
            }
        },
        end() {
            clear_animation();
            running_program = pending_program = null;
        }
    };
}

function handle_promise(promise, info) {
    const token = info.token = {};
    function update(type, index, key, value) {
        if (info.token !== token)
            return;
        info.resolved = value;
        let child_ctx = info.ctx;
        if (key !== undefined) {
            child_ctx = child_ctx.slice();
            child_ctx[key] = value;
        }
        const block = type && (info.current = type)(child_ctx);
        let needs_flush = false;
        if (info.block) {
            if (info.blocks) {
                info.blocks.forEach((block, i) => {
                    if (i !== index && block) {
                        group_outros();
                        transition_out(block, 1, 1, () => {
                            info.blocks[i] = null;
                        });
                        check_outros();
                    }
                });
            }
            else {
                info.block.d(1);
            }
            block.c();
            transition_in(block, 1);
            block.m(info.mount(), info.anchor);
            needs_flush = true;
        }
        info.block = block;
        if (info.blocks)
            info.blocks[index] = block;
        if (needs_flush) {
            flush();
        }
    }
    if (is_promise(promise)) {
        const current_component = get_current_component();
        promise.then(value => {
            set_current_component(current_component);
            update(info.then, 1, info.value, value);
            set_current_component(null);
        }, error => {
            set_current_component(current_component);
            update(info.catch, 2, info.error, error);
            set_current_component(null);
        });
        // if we previously had a then/catch block, destroy it
        if (info.current !== info.pending) {
            update(info.pending, 0);
            return true;
        }
    }
    else {
        if (info.current !== info.then) {
            update(info.then, 1, info.value, promise);
            return true;
        }
        info.resolved = promise;
    }
}

const globals = (typeof window !== 'undefined' ? window : global);

function destroy_block(block, lookup) {
    block.d(1);
    lookup.delete(block.key);
}
function outro_and_destroy_block(block, lookup) {
    transition_out(block, 1, 1, () => {
        lookup.delete(block.key);
    });
}
function fix_and_destroy_block(block, lookup) {
    block.f();
    destroy_block(block, lookup);
}
function fix_and_outro_and_destroy_block(block, lookup) {
    block.f();
    outro_and_destroy_block(block, lookup);
}
function update_keyed_each(old_blocks, dirty, get_key, dynamic, ctx, list, lookup, node, destroy, create_each_block, next, get_context) {
    let o = old_blocks.length;
    let n = list.length;
    let i = o;
    const old_indexes = {};
    while (i--)
        old_indexes[old_blocks[i].key] = i;
    const new_blocks = [];
    const new_lookup = new Map();
    const deltas = new Map();
    i = n;
    while (i--) {
        const child_ctx = get_context(ctx, list, i);
        const key = get_key(child_ctx);
        let block = lookup.get(key);
        if (!block) {
            block = create_each_block(key, child_ctx);
            block.c();
        }
        else if (dynamic) {
            block.p(child_ctx, dirty);
        }
        new_lookup.set(key, new_blocks[i] = block);
        if (key in old_indexes)
            deltas.set(key, Math.abs(i - old_indexes[key]));
    }
    const will_move = new Set();
    const did_move = new Set();
    function insert(block) {
        transition_in(block, 1);
        block.m(node, next);
        lookup.set(block.key, block);
        next = block.first;
        n--;
    }
    while (o && n) {
        const new_block = new_blocks[n - 1];
        const old_block = old_blocks[o - 1];
        const new_key = new_block.key;
        const old_key = old_block.key;
        if (new_block === old_block) {
            // do nothing
            next = new_block.first;
            o--;
            n--;
        }
        else if (!new_lookup.has(old_key)) {
            // remove old block
            destroy(old_block, lookup);
            o--;
        }
        else if (!lookup.has(new_key) || will_move.has(new_key)) {
            insert(new_block);
        }
        else if (did_move.has(old_key)) {
            o--;
        }
        else if (deltas.get(new_key) > deltas.get(old_key)) {
            did_move.add(new_key);
            insert(new_block);
        }
        else {
            will_move.add(old_key);
            o--;
        }
    }
    while (o--) {
        const old_block = old_blocks[o];
        if (!new_lookup.has(old_block.key))
            destroy(old_block, lookup);
    }
    while (n)
        insert(new_blocks[n - 1]);
    return new_blocks;
}
function validate_each_keys(ctx, list, get_context, get_key) {
    const keys = new Set();
    for (let i = 0; i < list.length; i++) {
        const key = get_key(get_context(ctx, list, i));
        if (keys.has(key)) {
            throw new Error(`Cannot have duplicate keys in a keyed each`);
        }
        keys.add(key);
    }
}

function get_spread_update(levels, updates) {
    const update = {};
    const to_null_out = {};
    const accounted_for = { $$scope: 1 };
    let i = levels.length;
    while (i--) {
        const o = levels[i];
        const n = updates[i];
        if (n) {
            for (const key in o) {
                if (!(key in n))
                    to_null_out[key] = 1;
            }
            for (const key in n) {
                if (!accounted_for[key]) {
                    update[key] = n[key];
                    accounted_for[key] = 1;
                }
            }
            levels[i] = n;
        }
        else {
            for (const key in o) {
                accounted_for[key] = 1;
            }
        }
    }
    for (const key in to_null_out) {
        if (!(key in update))
            update[key] = undefined;
    }
    return update;
}
function get_spread_object(spread_props) {
    return typeof spread_props === 'object' && spread_props !== null ? spread_props : {};
}

// source: https://html.spec.whatwg.org/multipage/indices.html
const boolean_attributes = new Set([
    'allowfullscreen',
    'allowpaymentrequest',
    'async',
    'autofocus',
    'autoplay',
    'checked',
    'controls',
    'default',
    'defer',
    'disabled',
    'formnovalidate',
    'hidden',
    'ismap',
    'loop',
    'multiple',
    'muted',
    'nomodule',
    'novalidate',
    'open',
    'playsinline',
    'readonly',
    'required',
    'reversed',
    'selected'
]);

const invalid_attribute_name_character = /[\s'">/=\u{FDD0}-\u{FDEF}\u{FFFE}\u{FFFF}\u{1FFFE}\u{1FFFF}\u{2FFFE}\u{2FFFF}\u{3FFFE}\u{3FFFF}\u{4FFFE}\u{4FFFF}\u{5FFFE}\u{5FFFF}\u{6FFFE}\u{6FFFF}\u{7FFFE}\u{7FFFF}\u{8FFFE}\u{8FFFF}\u{9FFFE}\u{9FFFF}\u{AFFFE}\u{AFFFF}\u{BFFFE}\u{BFFFF}\u{CFFFE}\u{CFFFF}\u{DFFFE}\u{DFFFF}\u{EFFFE}\u{EFFFF}\u{FFFFE}\u{FFFFF}\u{10FFFE}\u{10FFFF}]/u;
// https://html.spec.whatwg.org/multipage/syntax.html#attributes-2
// https://infra.spec.whatwg.org/#noncharacter
function spread(args, classes_to_add) {
    const attributes = Object.assign({}, ...args);
    if (classes_to_add) {
        if (attributes.class == null) {
            attributes.class = classes_to_add;
        }
        else {
            attributes.class += ' ' + classes_to_add;
        }
    }
    let str = '';
    Object.keys(attributes).forEach(name => {
        if (invalid_attribute_name_character.test(name))
            return;
        const value = attributes[name];
        if (value === true)
            str += " " + name;
        else if (boolean_attributes.has(name.toLowerCase())) {
            if (value)
                str += " " + name;
        }
        else if (value != null) {
            str += ` ${name}="${String(value).replace(/"/g, '&#34;').replace(/'/g, '&#39;')}"`;
        }
    });
    return str;
}
const escaped = {
    '"': '&quot;',
    "'": '&#39;',
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;'
};
function escape(html) {
    return String(html).replace(/["'&<>]/g, match => escaped[match]);
}
function each(items, fn) {
    let str = '';
    for (let i = 0; i < items.length; i += 1) {
        str += fn(items[i], i);
    }
    return str;
}
const missing_component = {
    $$render: () => ''
};
function validate_component(component, name) {
    if (!component || !component.$$render) {
        if (name === 'svelte:component')
            name += ' this={...}';
        throw new Error(`<${name}> is not a valid SSR component. You may need to review your build config to ensure that dependencies are compiled, rather than imported as pre-compiled modules`);
    }
    return component;
}
function debug(file, line, column, values) {
    console.log(`{@debug} ${file ? file + ' ' : ''}(${line}:${column})`); // eslint-disable-line no-console
    console.log(values); // eslint-disable-line no-console
    return '';
}
let on_destroy;
function create_ssr_component(fn) {
    function $$render(result, props, bindings, slots) {
        const parent_component = current_component;
        const $$ = {
            on_destroy,
            context: new Map(parent_component ? parent_component.$$.context : []),
            // these will be immediately discarded
            on_mount: [],
            before_update: [],
            after_update: [],
            callbacks: blank_object()
        };
        set_current_component({ $$ });
        const html = fn(result, props, bindings, slots);
        set_current_component(parent_component);
        return html;
    }
    return {
        render: (props = {}, options = {}) => {
            on_destroy = [];
            const result = { title: '', head: '', css: new Set() };
            const html = $$render(result, props, {}, options);
            run_all(on_destroy);
            return {
                html,
                css: {
                    code: Array.from(result.css).map(css => css.code).join('\n'),
                    map: null // TODO
                },
                head: result.title + result.head
            };
        },
        $$render
    };
}
function add_attribute(name, value, boolean) {
    if (value == null || (boolean && !value))
        return '';
    return ` ${name}${value === true ? '' : `=${typeof value === 'string' ? JSON.stringify(escape(value)) : `"${value}"`}`}`;
}
function add_classes(classes) {
    return classes ? ` class="${classes}"` : ``;
}

function bind(component, name, callback) {
    const index = component.$$.props[name];
    if (index !== undefined) {
        component.$$.bound[index] = callback;
        callback(component.$$.ctx[index]);
    }
}
function create_component(block) {
    block && block.c();
}
function claim_component(block, parent_nodes) {
    block && block.l(parent_nodes);
}
function mount_component(component, target, anchor) {
    const { fragment, on_mount, on_destroy, after_update } = component.$$;
    fragment && fragment.m(target, anchor);
    // onMount happens before the initial afterUpdate
    add_render_callback(() => {
        const new_on_destroy = on_mount.map(run).filter(is_function);
        if (on_destroy) {
            on_destroy.push(...new_on_destroy);
        }
        else {
            // Edge case - component was destroyed immediately,
            // most likely as a result of a binding initialising
            run_all(new_on_destroy);
        }
        component.$$.on_mount = [];
    });
    after_update.forEach(add_render_callback);
}
function destroy_component(component, detaching) {
    const $$ = component.$$;
    if ($$.fragment !== null) {
        run_all($$.on_destroy);
        $$.fragment && $$.fragment.d(detaching);
        // TODO null out other refs, including component.$$ (but need to
        // preserve final state?)
        $$.on_destroy = $$.fragment = null;
        $$.ctx = [];
    }
}
function make_dirty(component, i) {
    if (component.$$.dirty[0] === -1) {
        dirty_components.push(component);
        schedule_update();
        component.$$.dirty.fill(0);
    }
    component.$$.dirty[(i / 31) | 0] |= (1 << (i % 31));
}
function init(component, options, instance, create_fragment, not_equal, props, dirty = [-1]) {
    const parent_component = current_component;
    set_current_component(component);
    const prop_values = options.props || {};
    const $$ = component.$$ = {
        fragment: null,
        ctx: null,
        // state
        props,
        update: noop,
        not_equal,
        bound: blank_object(),
        // lifecycle
        on_mount: [],
        on_destroy: [],
        before_update: [],
        after_update: [],
        context: new Map(parent_component ? parent_component.$$.context : []),
        // everything else
        callbacks: blank_object(),
        dirty
    };
    let ready = false;
    $$.ctx = instance
        ? instance(component, prop_values, (i, ret, ...rest) => {
            const value = rest.length ? rest[0] : ret;
            if ($$.ctx && not_equal($$.ctx[i], $$.ctx[i] = value)) {
                if ($$.bound[i])
                    $$.bound[i](value);
                if (ready)
                    make_dirty(component, i);
            }
            return ret;
        })
        : [];
    $$.update();
    ready = true;
    run_all($$.before_update);
    // `false` as a special case of no DOM component
    $$.fragment = create_fragment ? create_fragment($$.ctx) : false;
    if (options.target) {
        if (options.hydrate) {
            // eslint-disable-next-line @typescript-eslint/no-non-null-assertion
            $$.fragment && $$.fragment.l(children(options.target));
        }
        else {
            // eslint-disable-next-line @typescript-eslint/no-non-null-assertion
            $$.fragment && $$.fragment.c();
        }
        if (options.intro)
            transition_in(component.$$.fragment);
        mount_component(component, options.target, options.anchor);
        flush();
    }
    set_current_component(parent_component);
}
let SvelteElement;
if (typeof HTMLElement === 'function') {
    SvelteElement = class extends HTMLElement {
        constructor() {
            super();
            this.attachShadow({ mode: 'open' });
        }
        connectedCallback() {
            // @ts-ignore todo: improve typings
            for (const key in this.$$.slotted) {
                // @ts-ignore todo: improve typings
                this.appendChild(this.$$.slotted[key]);
            }
        }
        attributeChangedCallback(attr, _oldValue, newValue) {
            this[attr] = newValue;
        }
        $destroy() {
            destroy_component(this, 1);
            this.$destroy = noop;
        }
        $on(type, callback) {
            // TODO should this delegate to addEventListener?
            const callbacks = (this.$$.callbacks[type] || (this.$$.callbacks[type] = []));
            callbacks.push(callback);
            return () => {
                const index = callbacks.indexOf(callback);
                if (index !== -1)
                    callbacks.splice(index, 1);
            };
        }
        $set() {
            // overridden by instance, if it has props
        }
    };
}
class SvelteComponent {
    $destroy() {
        destroy_component(this, 1);
        this.$destroy = noop;
    }
    $on(type, callback) {
        const callbacks = (this.$$.callbacks[type] || (this.$$.callbacks[type] = []));
        callbacks.push(callback);
        return () => {
            const index = callbacks.indexOf(callback);
            if (index !== -1)
                callbacks.splice(index, 1);
        };
    }
    $set() {
        // overridden by instance, if it has props
    }
}

function dispatch_dev(type, detail) {
    document.dispatchEvent(custom_event(type, Object.assign({ version: '3.18.1' }, detail)));
}
function append_dev(target, node) {
    dispatch_dev("SvelteDOMInsert", { target, node });
    append(target, node);
}
function insert_dev(target, node, anchor) {
    dispatch_dev("SvelteDOMInsert", { target, node, anchor });
    insert(target, node, anchor);
}
function detach_dev(node) {
    dispatch_dev("SvelteDOMRemove", { node });
    detach(node);
}
function detach_between_dev(before, after) {
    while (before.nextSibling && before.nextSibling !== after) {
        detach_dev(before.nextSibling);
    }
}
function detach_before_dev(after) {
    while (after.previousSibling) {
        detach_dev(after.previousSibling);
    }
}
function detach_after_dev(before) {
    while (before.nextSibling) {
        detach_dev(before.nextSibling);
    }
}
function listen_dev(node, event, handler, options, has_prevent_default, has_stop_propagation) {
    const modifiers = options === true ? ["capture"] : options ? Array.from(Object.keys(options)) : [];
    if (has_prevent_default)
        modifiers.push('preventDefault');
    if (has_stop_propagation)
        modifiers.push('stopPropagation');
    dispatch_dev("SvelteDOMAddEventListener", { node, event, handler, modifiers });
    const dispose = listen(node, event, handler, options);
    return () => {
        dispatch_dev("SvelteDOMRemoveEventListener", { node, event, handler, modifiers });
        dispose();
    };
}
function attr_dev(node, attribute, value) {
    attr(node, attribute, value);
    if (value == null)
        dispatch_dev("SvelteDOMRemoveAttribute", { node, attribute });
    else
        dispatch_dev("SvelteDOMSetAttribute", { node, attribute, value });
}
function prop_dev(node, property, value) {
    node[property] = value;
    dispatch_dev("SvelteDOMSetProperty", { node, property, value });
}
function dataset_dev(node, property, value) {
    node.dataset[property] = value;
    dispatch_dev("SvelteDOMSetDataset", { node, property, value });
}
function set_data_dev(text, data) {
    data = '' + data;
    if (text.data === data)
        return;
    dispatch_dev("SvelteDOMSetData", { node: text, data });
    text.data = data;
}
class SvelteComponentDev extends SvelteComponent {
    constructor(options) {
        if (!options || (!options.target && !options.$$inline)) {
            throw new Error(`'target' is a required option`);
        }
        super();
    }
    $destroy() {
        super.$destroy();
        this.$destroy = () => {
            console.warn(`Component was already destroyed`); // eslint-disable-line no-console
        };
    }
}
function loop_guard(timeout) {
    const start = Date.now();
    return () => {
        if (Date.now() - start > timeout) {
            throw new Error(`Infinite loop detected`);
        }
    };
}




/***/ }),

/***/ "./resources/css/style.css":
/*!*********************************!*\
  !*** ./resources/css/style.css ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/js/components/potluck/Potluck.svelte":
/*!********************************************************!*\
  !*** ./resources/js/components/potluck/Potluck.svelte ***!
  \********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var svelte_internal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! svelte/internal */ "./node_modules/svelte/internal/index.mjs");
/* harmony import */ var svelte__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! svelte */ "./node_modules/svelte/index.mjs");
/* harmony import */ var _players__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./players */ "./resources/js/components/potluck/players.js");
/* harmony import */ var _strains__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./strains */ "./resources/js/components/potluck/strains.js");
/* harmony import */ var _spaces__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./spaces */ "./resources/js/components/potluck/spaces.js");
/* harmony import */ var _bummers__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./bummers */ "./resources/js/components/potluck/bummers.js");
/* harmony import */ var _farouts__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./farouts */ "./resources/js/components/potluck/farouts.js");
/* resources/js/components/potluck/Potluck.svelte generated by Svelte v3.18.1 */


const { document: document_1 } = svelte_internal__WEBPACK_IMPORTED_MODULE_0__["globals"];







function add_css() {
	var style = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("style");
	style.id = "svelte-121h6el-style";
	style.textContent = "div.svelte-121h6el{box-sizing:border-box;text-transform:uppercase}.box.svelte-121h6el{position:relative;top:50%;left:50%;right:50%;bottom:50%;overflow:hidden}.potluck.svelte-121h6el{background-color:floralwhite;width:95.75vw;height:95.75vw;margin:10px auto}.gameBoard.svelte-121h6el{height:100%;position:relative;background-color:floralwhite}.row.svelte-121h6el{width:100%;display:flex}.top.svelte-121h6el{height:15.384615385%}.center.svelte-121h6el{height:69.23076923%}.square1.svelte-121h6el{outline:1px solid black;flex-grow:1;position:relative;background:floralwhite;overflow:hidden}.square2.svelte-121h6el{flex-grow:2;outline:1px solid black;display:flex;flex-direction:column;position:relative;background:floralwhite;overflow:hidden}.square9.svelte-121h6el{flex-grow:9;outline:1px solid black;background:lightgoldenrodyellow}.squareSide.svelte-121h6el{outline:1px solid black;width:100%;flex-grow:1;position:relative}.header.svelte-121h6el{height:21%;position:absolute;outline:2px solid black;background:grey;background:transparent url('/img/leaf-bg.png') center center no-repeat;background-position:contain}.headerSide.svelte-121h6el{width:21%;position:absolute;outline:2px solid black}.header-top.svelte-121h6el{bottom:1px;left:1px;right:1px;background:transparent url('/img/leaf-180-bg.png') center center no-repeat;background-size:contain}.header-bottom.svelte-121h6el{top:1px;left:1px;right:1px;background:transparent url('/img/leaf-bg.png') center center no-repeat;background-size:contain}.header-left.svelte-121h6el{top:1px;bottom:1px;right:1px;background:grey;background:transparent url('/img/leaf-90-bg.png') center center no-repeat;background-size:contain}.header-right.svelte-121h6el{top:1px;bottom:1px;left:1px;background:grey;background:transparent url('/img/leaf-270-bg.png') center center no-repeat;background-size:contain}.firstLine.svelte-121h6el{position:absolute;font-size:0.7vw;font-weight:500;line-height:1vw;text-align:center}.firstLine-top.svelte-121h6el{left:1px;right:1px;bottom:30%;height:10%}.firstLine-top.no-color.svelte-121h6el{bottom:12%}.firstLine-left.svelte-121h6el{top:0px;bottom:0px;right:42%}.firstLine-left.no-color.svelte-121h6el{right:23%}.firstLine-right.svelte-121h6el{top:0;bottom:0;left:42%}.firstLine-right.no-color.svelte-121h6el{left:23%}.firstLine-bottom.svelte-121h6el{left:0;right:0;top:30%}.firstLine-bottom.no-color.svelte-121h6el{top:12%}.red.svelte-121h6el{background-color:#ed1b24}.yellow.svelte-121h6el{background-color:#fef200}.lightblue.svelte-121h6el{background-color:#aae0fa}.brown.svelte-121h6el{background-color:#955436}.blue.svelte-121h6el{background-color:#0072bb}.green.svelte-121h6el{background-color:#1fb25a}.orange.svelte-121h6el{background-color:#f7941d}.purple.svelte-121h6el{background-color:#d93a96}.left-side.svelte-121h6el{transform:rotate(90deg)}.top-side.svelte-121h6el{transform:rotate(180deg)}.right-side.svelte-121h6el{transform:rotate(-90deg)}.logoBox.svelte-121h6el{width:46%;background:transparent;position:absolute;transform:rotateZ(-45deg) translateX(-26.5%) translateY(246.5%);border:3px solid black;border-radius:1em;padding:0, 0.1em, 0.2em 0.1em;text-align:center;box-shadow:inset 0px 4px 24px 8px white;box-shadow:inset 0px 2px 12px 0px greenyellow}.logoName.svelte-121h6el{font-size:7.0vw;color:black;font-family:futura;-webkit-text-stroke-width:2px;-webkit-text-stroke-color:black;text-shadow:-3px 2px 0px black;-webkit-text-fill-color:transparent}.card-box.svelte-121h6el{position:absolute;width:15%;height:9vw}.card-blue.svelte-121h6el{background:rgb(66, 166, 240) url('/img/FarOut.jpg') center center no-repeat;background-size:contain;border-radius:0.3em;transform:rotateZ(-45deg) translateX(-5.5%) translateY(132.25%)}.card-blue-inside.svelte-121h6el{width:94%;height:94%;margin:0.3vw auto;position:relative}.card-orange.svelte-121h6el{background:rgb(66, 166, 240) url('/img/BumOut.jpg') center center no-repeat;background-size:contain;transform:rotateZ(-45deg) translateX(-25%) translateY(687.25%);border-radius:0.3em}.card-orange-inside.svelte-121h6el{width:94%;height:94%;margin:0.3vw auto;position:relative}.corner.svelte-121h6el{position:absolute;text-align:center;line-height:8vw;font-size:1.2vw;font-weight:500}.corner1.svelte-121h6el{transform:rotateZ(135deg) translateX(-22%) translateY(-107%)}.corner2.svelte-121h6el{transform:rotateZ(-135deg) translateX(-75%) translateY(-75%);line-height:1em}.corner4.svelte-121h6el{transform:rotateZ(45deg) translateX(32%) translateY(0%);line-height:1em}";
	Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(document_1.head, style);
}

function get_each_context_1(ctx, list, i) {
	const child_ctx = ctx.slice();
	child_ctx[20] = list[i];
	return child_ctx;
}

function get_each_context(ctx, list, i) {
	const child_ctx = ctx.slice();
	child_ctx[17] = list[i];
	return child_ctx;
}

// (724:16) {#each player.strains as strain}
function create_each_block_1(ctx) {
	let p;
	let t0_value = /*strain*/ ctx[20].name + "";
	let t0;
	let t1;
	let span;
	let t2;
	let t3_value = /*strain*/ ctx[20].oz + "";
	let t3;
	let t4;
	let t5_value = /*strain*/ ctx[20].price / 10 + "";
	let t5;
	let t6;

	return {
		c() {
			p = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("p");
			t0 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["text"])(t0_value);
			t1 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["space"])();
			span = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("span");
			t2 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["text"])("$");
			t3 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["text"])(t3_value);
			t4 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["text"])(" \n                ($");
			t5 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["text"])(t5_value);
			t6 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["text"])(") \n                                \n                ");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(span, "class", "text-green-600");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(p, "class", "p-1");
		},
		m(target, anchor) {
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["insert"])(target, p, anchor);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(p, t0);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(p, t1);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(p, span);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(span, t2);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(span, t3);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(p, t4);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(p, t5);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(p, t6);
		},
		p(ctx, dirty) {
			if (dirty & /*state*/ 1 && t0_value !== (t0_value = /*strain*/ ctx[20].name + "")) Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["set_data"])(t0, t0_value);
			if (dirty & /*state*/ 1 && t3_value !== (t3_value = /*strain*/ ctx[20].oz + "")) Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["set_data"])(t3, t3_value);
			if (dirty & /*state*/ 1 && t5_value !== (t5_value = /*strain*/ ctx[20].price / 10 + "")) Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["set_data"])(t5, t5_value);
		},
		d(detaching) {
			if (detaching) Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["detach"])(p);
		}
	};
}

// (719:4) {#each state.players as player}
function create_each_block(ctx) {
	let div2;
	let div0;
	let t0_value = /*player*/ ctx[17].name + "";
	let t0;
	let t1;
	let html_tag;
	let raw_value = /*player*/ ctx[17].token + "";
	let t2;
	let span;
	let t3;
	let t4_value = /*player*/ ctx[17].cash + "";
	let t4;
	let t5;
	let div1;
	let t6;
	let each_value_1 = /*player*/ ctx[17].strains;
	let each_blocks = [];

	for (let i = 0; i < each_value_1.length; i += 1) {
		each_blocks[i] = create_each_block_1(get_each_context_1(ctx, each_value_1, i));
	}

	return {
		c() {
			div2 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("div");
			div0 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("div");
			t0 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["text"])(t0_value);
			t1 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["space"])();
			t2 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["space"])();
			span = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("span");
			t3 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["text"])("$");
			t4 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["text"])(t4_value);
			t5 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["space"])();
			div1 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("div");

			for (let i = 0; i < each_blocks.length; i += 1) {
				each_blocks[i].c();
			}

			t6 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["space"])();
			html_tag = new svelte_internal__WEBPACK_IMPORTED_MODULE_0__["HtmlTag"](raw_value, t2);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(span, "class", "text-green-600");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(div0, "class", "p-1 mx-1 rounded-sm font-bold text-sm bg-gray-300 svelte-121h6el");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["set_style"])(div0, "overflow", "hidden");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(div1, "class", "mx-1 bg-gray-100 rounded-sm text-xs svelte-121h6el");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(div2, "class", "inline-block align-top svelte-121h6el");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["set_style"])(div2, "width", 100 / /*state*/ ctx[0].players.length + "%");
		},
		m(target, anchor) {
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["insert"])(target, div2, anchor);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(div2, div0);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(div0, t0);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(div0, t1);
			html_tag.m(div0);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(div0, t2);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(div0, span);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(span, t3);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(span, t4);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(div2, t5);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(div2, div1);

			for (let i = 0; i < each_blocks.length; i += 1) {
				each_blocks[i].m(div1, null);
			}

			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(div2, t6);
		},
		p(ctx, dirty) {
			if (dirty & /*state*/ 1 && t0_value !== (t0_value = /*player*/ ctx[17].name + "")) Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["set_data"])(t0, t0_value);
			if (dirty & /*state*/ 1 && raw_value !== (raw_value = /*player*/ ctx[17].token + "")) html_tag.p(raw_value);
			if (dirty & /*state*/ 1 && t4_value !== (t4_value = /*player*/ ctx[17].cash + "")) Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["set_data"])(t4, t4_value);

			if (dirty & /*state*/ 1) {
				each_value_1 = /*player*/ ctx[17].strains;
				let i;

				for (i = 0; i < each_value_1.length; i += 1) {
					const child_ctx = get_each_context_1(ctx, each_value_1, i);

					if (each_blocks[i]) {
						each_blocks[i].p(child_ctx, dirty);
					} else {
						each_blocks[i] = create_each_block_1(child_ctx);
						each_blocks[i].c();
						each_blocks[i].m(div1, null);
					}
				}

				for (; i < each_blocks.length; i += 1) {
					each_blocks[i].d(1);
				}

				each_blocks.length = each_value_1.length;
			}

			if (dirty & /*state*/ 1) {
				Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["set_style"])(div2, "width", 100 / /*state*/ ctx[0].players.length + "%");
			}
		},
		d(detaching) {
			if (detaching) Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["detach"])(div2);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["destroy_each"])(each_blocks, detaching);
		}
	};
}

function create_fragment(ctx) {
	let link;
	let t0;
	let main;
	let div0;
	let button;
	let p0;
	let t2;
	let t3_value = /*state*/ ctx[0].turnNumber + "";
	let t3;
	let br0;
	let t4;
	let p1;
	let t5_value = /*state*/ ctx[0].message + "";
	let t5;
	let t6;
	let div151;
	let t184;
	let div152;
	let dispose;
	let each_value = /*state*/ ctx[0].players;
	let each_blocks = [];

	for (let i = 0; i < each_value.length; i += 1) {
		each_blocks[i] = create_each_block(get_each_context(ctx, each_value, i));
	}

	return {
		c() {
			link = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("link");
			t0 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["space"])();
			main = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("main");
			div0 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("div");
			button = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("button");
			button.textContent = "Start Game";
			p0 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("p");
			t2 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["text"])("Turn #");
			t3 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["text"])(t3_value);
			br0 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("br");
			t4 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["space"])();
			p1 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("p");
			t5 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["text"])(t5_value);
			t6 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["space"])();
			div151 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("div");

			div151.innerHTML = `<div class="gameBoard svelte-121h6el"><div class="row top svelte-121h6el"><div class="square2 svelte-121h6el"><span class="corner corner1 svelte-121h6el">JACKPOT!</span> 
                    <div class="box svelte-121h6el" id="20"></div></div> 
                <div class="square1 svelte-121h6el"><div class="header header-top purple svelte-121h6el"></div> 
                    <div class="firstLine firstLine-top top-side svelte-121h6el">Hawaiian</div> 
                    <div class="box svelte-121h6el" id="21"></div></div> 
                <div class="square1 svelte-121h6el"><div class="firstLine firstLine-top no-color top-side svelte-121h6el">Vacation<br>Time<br>Relax,<br> Lose a Turn
                    </div> 
                    <div class="box svelte-121h6el" id="22"></div></div> 
                <div class="square1 svelte-121h6el"><div class="firstLine firstLine-top no-color top-side svelte-121h6el">Bum Me Out</div> 
                    <div class="box svelte-121h6el" id="23"></div></div> 
                <div class="square1 svelte-121h6el"><div class="header header-top orange svelte-121h6el"></div> 
                    <div class="firstLine firstLine-top top-side svelte-121h6el">Nicaraguan</div> 
                    <div class="box svelte-121h6el" id="24"></div></div> 
                <div class="square1 svelte-121h6el"><div class="firstLine firstLine-top no-color top-side svelte-121h6el">MUNCHIES!<br> Pay 10x your roll</div> 
                    <div class="box svelte-121h6el" id="25"></div></div> 
                <div class="square1 svelte-121h6el"><div class="header header-top yellow svelte-121h6el"></div> 
                    <div class="firstLine firstLine-top top-side svelte-121h6el">Colombian Gold</div> 
                    <div class="box svelte-121h6el" id="26"></div></div> 
                <div class="square1 svelte-121h6el"><div class="firstLine firstLine-top top-side svelte-121h6el">Far<br>Out</div> 
                    <div class="box svelte-121h6el" id="27"></div></div> 
                <div class="square1 svelte-121h6el"><div class="header header-top lightblue svelte-121h6el"></div> 
                    <div class="firstLine firstLine-top top-side svelte-121h6el">Just <br>Good Pot</div> 
                    <div class="box svelte-121h6el" id="28"></div></div> 
                <div class="square1 svelte-121h6el"><div class="header header-top blue svelte-121h6el"></div> 
                    <div class="firstLine firstLine-top top-side svelte-121h6el">just<br> bad pot</div> 
                    <div class="box svelte-121h6el" id="29"></div></div> 
                <div class="square2 svelte-121h6el"><span class="corner corner2 svelte-121h6el">Busted...<br>lose 1 turn</span></div> 
                <div class="box svelte-121h6el" id="30"></div></div> 

            <div class="row center svelte-121h6el"><div class="square2 svelte-121h6el"><div class="squareSide svelte-121h6el"><div class="headerSide header-left yellow svelte-121h6el"></div> 
                        <div class="firstLine firstLine-left left-side svelte-121h6el">Acapulco<br>Gold</div> 
                        <div class="box svelte-121h6el" id="19"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="firstLine firstLine-left no-color left-side svelte-121h6el">The Law: <br> Pay 20x</div> 
                        <div class="box svelte-121h6el" id="18"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="headerSide header-left yellow svelte-121h6el"></div> 
                        <div class="firstLine firstLine-left left-side svelte-121h6el">Sinsemilla</div> 
                        <div class="box svelte-121h6el" id="17"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="firstLine firstLine-left no-color left-side svelte-121h6el">Dealing <br>Square</div> 
                        <div class="box svelte-121h6el" id="16"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="headerSide header-left red svelte-121h6el"></div> 
                        <div class="firstLine firstLine-left left-side svelte-121h6el">Maui Wowie</div> 
                        <div class="box svelte-121h6el" id="15"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="firstLine firstLine-left no-color left-side svelte-121h6el">Midnight <br>Airstrip<br> Pay 40x</div> 
                        <div class="box svelte-121h6el" id="14"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="headerSide header-left green svelte-121h6el"></div> 
                        <div class="firstLine firstLine-left left-side svelte-121h6el">Guerrero<br> Green</div> 
                        <div class="box svelte-121h6el" id="13"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="firstLine firstLine-left no-color left-side svelte-121h6el">You Pay<br>10x</div> 
                        <div class="box svelte-121h6el" id="12"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="headerSide header-left lightblue svelte-121h6el"></div> 
                        <div class="firstLine firstLine-left left-side svelte-121h6el">colombian<br>chiba</div> 
                        <div class="box svelte-121h6el" id="11"></div></div></div> 
                <div class="square9 svelte-121h6el"><div class="card-box card-blue svelte-121h6el"><div class="card-blue-inside svelte-121h6el"></div></div> 
                    <div class="logoBox svelte-121h6el"><span class="logoName svelte-121h6el">Pot Luck</span></div> 
                    <div class="card-box card-orange svelte-121h6el"><div class="card-orange-inside svelte-121h6el"></div></div></div> 
                <div class="square2 svelte-121h6el"><div class="squareSide svelte-121h6el"><div class="headerSide header-right purple svelte-121h6el"></div> 
                        <div class="firstLine firstLine-right right-side svelte-121h6el">Vietnamese</div> 
                        <div class="box svelte-121h6el" id="31"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="headerSide header-right orange svelte-121h6el"></div> 
                        <div class="firstLine firstLine-right right-side svelte-121h6el">Stickless<br>Thai</div> 
                        <div class="box svelte-121h6el" id="32"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="firstLine firstLine-right no-color right-side svelte-121h6el">No-Tell<br> Car Rental<br>pay 10x
                        </div> 
                        <div class="box svelte-121h6el" id="33"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="headerSide header-right red svelte-121h6el"></div> 
                        <div class="firstLine firstLine-right right-side svelte-121h6el">Panama<br> Red</div> 
                        <div class="box svelte-121h6el" id="34"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="headerSide header-right brown svelte-121h6el"></div> 
                        <div class="firstLine firstLine-right right-side svelte-121h6el">Mexican</div> 
                        <div class="box svelte-121h6el" id="35"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="firstLine firstLine-right no-color right-side svelte-121h6el">Dealing <br>Square</div> 
                        <div class="box svelte-121h6el" id="36"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="headerSide header-right lightblue svelte-121h6el"></div> 
                        <div class="firstLine firstLine-right right-side svelte-121h6el">Jamaican</div> 
                        <div class="box svelte-121h6el" id="37"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="firstLine firstLine-right no-color right-side svelte-121h6el">bum<br>me out</div> 
                        <div class="box svelte-121h6el" id="38"></div></div> 
                    <div class="squareSide svelte-121h6el"><div class="headerSide header-right yellow svelte-121h6el"></div> 
                        <div class="firstLine firstLine-right right-side svelte-121h6el">michoacan</div> 
                        <div class="box svelte-121h6el" id="39"></div></div></div></div> 

            <div class="row top svelte-121h6el"><div class="square2 svelte-121h6el"><span class="corner corner4 svelte-121h6el" style="line-height:1em;"> Hospital: <br>lose a
                        turn. <br>pay 100x your roll
                    </span> 
                    <div class="box svelte-121h6el" id="10"></div></div> 
                <div class="square1 svelte-121h6el"><div class="header header-bottom red svelte-121h6el"></div> 
                    <div class="firstLine firstLine-bottom svelte-121h6el">colombian <br>red bud</div> 
                    <div class="box svelte-121h6el" id="9"></div></div> 
                <div class="square1 svelte-121h6el"><div class="header header-bottom blue svelte-121h6el"></div> 
                    <div class="firstLine firstLine-bottom svelte-121h6el">thai<br>stick</div> 
                    <div class="box svelte-121h6el" id="8"></div></div> 
                <div class="square1 svelte-121h6el"><div class="firstLine firstLine-bottom no-color svelte-121h6el">downtown<br>pharmacy <br>Pay 5x</div> 
                    <div class="box svelte-121h6el" id="7"></div></div> 
                <div class="square1 svelte-121h6el"><div class="header header-bottom green svelte-121h6el"></div> 
                    <div class="firstLine firstLine-bottom svelte-121h6el">gainesville<br> green</div> 
                    <div class="box svelte-121h6el" id="6"></div></div> 
                <div class="square1 svelte-121h6el"><div class="header header-bottom orange svelte-121h6el"></div> 
                    <div class="firstLine firstLine-bottom svelte-121h6el">wacky<br> weed</div> 
                    <div id="5" class="svelte-121h6el"></div></div> 
                <div class="square1 svelte-121h6el"><div class="firstLine firstLine-bottom no-color svelte-121h6el">Far <br> Out!</div> 
                    <div class="box svelte-121h6el" id="4"></div></div> 
                <div class="square1 svelte-121h6el"><div class="header header-bottom green svelte-121h6el"></div> 
                    <div class="firstLine firstLine-bottom svelte-121h6el">Home Grown</div> 
                    <div class="box svelte-121h6el" id="3"></div></div> 
                <div class="square1 svelte-121h6el"><div class="firstLine firstLine-bottom no-color svelte-121h6el">Flying<br> Too High:<br>Lose A<br>Turn</div> 
                    <div class="box svelte-121h6el" id="2"></div></div> 
                <div class="square1 svelte-121h6el"><div class="header header-bottom brown svelte-121h6el"></div> 
                    <div class="firstLine firstLine-bottom svelte-121h6el">Colombian</div> 
                    <div class="box svelte-121h6el" id="1"></div></div> 
                <div class="square2 svelte-121h6el" style="background-image:url(&#39;/img/straight.jpg&#39;); background-size:cover;"><div class="box svelte-121h6el" id="40"></div></div></div></div>`;

			t184 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["space"])();
			div152 = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["element"])("div");

			for (let i = 0; i < each_blocks.length; i += 1) {
				each_blocks[i].c();
			}

			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(link, "rel", "stylesheet");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(link, "href", "/css/style.css");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(button, "class", "btn-blue");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(p0, "class", "inline-block text-bold text-lg mx-2");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(p1, "class", "block mt-2 text-sm");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(div0, "class", "container-fluid p-1 bg-white svelte-121h6el");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(div151, "class", "potluck svelte-121h6el");
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["attr"])(div152, "class", "container p-1 mx-1 flex-row svelte-121h6el");
		},
		m(target, anchor) {
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(document_1.head, link);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["insert"])(target, t0, anchor);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["insert"])(target, main, anchor);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(main, div0);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(div0, button);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(div0, p0);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(p0, t2);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(p0, t3);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(div0, br0);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(div0, t4);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(div0, p1);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(p1, t5);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(main, t6);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(main, div151);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(main, t184);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["append"])(main, div152);

			for (let i = 0; i < each_blocks.length; i += 1) {
				each_blocks[i].m(div152, null);
			}

			dispose = Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["listen"])(button, "click", /*startGame*/ ctx[1]);
		},
		p(ctx, [dirty]) {
			if (dirty & /*state*/ 1 && t3_value !== (t3_value = /*state*/ ctx[0].turnNumber + "")) Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["set_data"])(t3, t3_value);
			if (dirty & /*state*/ 1 && t5_value !== (t5_value = /*state*/ ctx[0].message + "")) Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["set_data"])(t5, t5_value);

			if (dirty & /*state*/ 1) {
				each_value = /*state*/ ctx[0].players;
				let i;

				for (i = 0; i < each_value.length; i += 1) {
					const child_ctx = get_each_context(ctx, each_value, i);

					if (each_blocks[i]) {
						each_blocks[i].p(child_ctx, dirty);
					} else {
						each_blocks[i] = create_each_block(child_ctx);
						each_blocks[i].c();
						each_blocks[i].m(div152, null);
					}
				}

				for (; i < each_blocks.length; i += 1) {
					each_blocks[i].d(1);
				}

				each_blocks.length = each_value.length;
			}
		},
		i: svelte_internal__WEBPACK_IMPORTED_MODULE_0__["noop"],
		o: svelte_internal__WEBPACK_IMPORTED_MODULE_0__["noop"],
		d(detaching) {
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["detach"])(link);
			if (detaching) Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["detach"])(t0);
			if (detaching) Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["detach"])(main);
			Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["destroy_each"])(each_blocks, detaching);
			dispose();
		}
	};
}

function dieRoll(min, max) {
	min = Math.ceil(min);
	max = Math.floor(max);
	return Math.floor(Math.random() * (max - min + 1)) + min;
}

function instance($$self, $$props, $$invalidate) {
	let state = {
		turnNumber: 1,
		message: "Press 'Start Game'",
		skipped: [],
		activePlayerId: 0,
		currentRoll: 0,
		players: _players__WEBPACK_IMPORTED_MODULE_2__["default"],
		bank: { strains: _strains__WEBPACK_IMPORTED_MODULE_3__["default"], cash: 100000 },
		jackpot: { cash: 2000 },
		farouts: _farouts__WEBPACK_IMPORTED_MODULE_6__["default"],
		bummers: _bummers__WEBPACK_IMPORTED_MODULE_5__["default"],
		spaces: _spaces__WEBPACK_IMPORTED_MODULE_4__["default"]
	};

	function abortGame(reason) {
		let bwned = "";

		if (state.bank.strains.length > 1) {
			for (let i = 0; i < state.bank.strains.length - 1; ) {
				bwned += state.bank.strains[i].name + ", ";
				i += 1;
			}

			bwned += "and " + state.bank.strains[state.bank.strains.length - 1].name;
		}

		if ($$invalidate(0, state.bank.strains.length = 1, state)) {
			bwned = state.bank.strains[0].name;
		}

		let statusMessage = "The bank had $" + state.bank.cash + " and " + state.bank.strains.length + " strains. " + bwned + ". ";

		state.players.forEach(function (player) {
			let owned = "";

			if (player.strains.length > 1) {
				for (let i = 0; i < player.strains.length - 1; ) {
					owned += player.strains[i].name + ", ";
					i += 1;
				}

				owned += "and " + player.strains[player.strains.length - 1].name;
			}

			if (player.strains.length === 1) {
				owned = player.strains[0].name;
			}

			statusMessage += player.name + " had $" + player.cash + " and " + player.strains.length + " strains. They owned " + owned + ". ";
		});

		let message = "On or about turn #" + state.turnNumber + ": The game was aborted for " + reason + ". " + statusMessage;

		let endState = {
			turnNumber: state.turnNumber,
			skipped: state.skipped.length,
			players: state.players,
			bank: {
				strains: state.strains,
				cash: state.bank.cash
			},
			jackpot: { cash: state.jackpot.cash }
		};

		var xhr = new XMLHttpRequest();
		xhr.open("POST", "/api/potluck_log", true);
		xhr.setRequestHeader("Content-Type", "application/json");
		xhr.send(JSON.stringify({ value: { message, "state": endState } }));
		console.error("Bank Bailout! $" + state.bank.cash + " " + message);

		// alert(message)
		window.location.href = "/potluck";
	}

	function currentPlayer() {
		return state.players[state.activePlayerId];
	}

	function mapEvents(e) {
		switch (e) {
			case "bumEveryoneOut":
				state.players.forEach(function (player) {
					player.cash -= 200;
					currentPlayer().cash += 200;
				});
				return "Each player paid the bad bad bummer boy. $200";
			case "pot":
				return pot();
			case "reducePot":
				return currentPlayer().discount = true;
			case "freePound":
				return currentPlayer().freePound = true;
			case "halfOff":
				return currentPlayer().halfOff = true;
			case "deal":
				return owned();
				break;
			case "loseTurn":
				$$invalidate(0, state.message = currentPlayer().name + " lost a turn", state);
				state.skipped.push(state.activePlayerId);
				return;
			case "bummer":
				let b = bummer();
				$$invalidate(0, state.message = "Bummer! " + b.title, state);
				return mapEvents(b.effect);
			case "farout":
				let f = farout();
				$$invalidate(0, state.message = "Far Out! " + f.title, state);
				return mapEvents(f.effect);
			case "highRoller":
				const roller = dieRoll(1, 6) + dieRoll(1, 6) * 100;
				return mapEvents("w" + roller);
			case "payLefty":
				const lefty = dieRoll(1, 6) + dieRoll(1, 6) * 100;
				currentPlayer().cash -= lefty;
				let leftyId = state.activePlayerId - 1;
				if (leftyId < 0) {
					leftyId = state.players.length - 1;
				}
				return $$invalidate(0, state.players[leftyId].cash += lefty, state);
			case "jackpot":
				$$invalidate(0, state.message = currentPlayer().name + " won $" + state.jackpot.cash + " from the jackpot!", state);
				currentPlayer().cash += state.jackpot.cash;
				$$invalidate(0, state.jackpot.cash = 0, state);
				return;
			case "paraquat":
				$$invalidate(0, state.message = currentPlayer().name + " got paraquat, this is going to suck.", state);
				$$invalidate(0, state.message = currentPlayer().name + " lost a turn to paraquat", state);
				state.skipped.push(state.skipped[state.activePlayerId]);
				if (currentPlayer().getOutOfHospital === true) {
					currentPlayer().getOutOfHospital = false;
					return $$invalidate(0, state.message = currentPlayer().name + "You lucky dog", state);
				}
				mapEvents("hospital");
				break;
			case "hospital":
				currentPlayer().space = 10;
				mapEvents("loseTurn");
				mapEvents("x100");
				drawPlayerPieces();
				break;
			case "getOutOfHospital":
				return currentPlayer().getOutOfHospital = true;
			default:
				if (e.substring(0, 1) === "x") {
					let pay = Number(e.substring(1, 5)) * state.currentRoll;
					currentPlayer().cash -= pay;
					$$invalidate(0, state.bank.cash += pay, state);
					return currentPlayer().cash;
				}
				if (e.substring(0, 1) === "l") {
					let lose = Number(e.substring(1, 5));
					currentPlayer().cash -= lose;
					$$invalidate(0, state.bank.cash += lose, state);
					return currentPlayer().cash;
				}
				if (e.substring(0, 1) === "w") {
					let win = Number(e.substring(1, 5));
					currentPlayer().cash += win;
					$$invalidate(0, state.bank.cash -= win, state);
					return currentPlayer().cash;
				} else {
					return console.error("unhandled case in mapEvents() " + e);
				}
		}
	}

	function owned() {
		//get all strains by player.
		let owned = [];

		state.players.forEach(function (player) {
			player.strains.map(function (strain) {
				return owned.push({
					player,
					price: strain.price,
					name: strain.name,
					rent: strain.oz,
					value: strain.oz * 5
				});
			});
		});

		return owned;
	}

	function pot() {
		let bankStrains = state.bank.strains;

		for (let i = 0; i < bankStrains.length; ) {
			if (bankStrains[i].space == currentPlayer().space) {
				if (bankStrains[i].price < currentPlayer().cash) {
					buyPot(bankStrains[i]);
					state.bank.strains.splice(i, 1);
					return;
				} else {
					$$invalidate(0, state.message = currentPlayer().name + " did not have enough money for " + bankStrains[i].name, state);
				}
			}

			i += 1;
		}

		for (let i = 0; i < state.players.length; ) {
			state.players[i].strains.find(function (s) {
				if (s.space === currentPlayer().space) {
					if (currentPlayer().strains.includes(s)) {
						if (currentPlayer().freePound === true) {
							return pound(s);
						}

						if (s.price < currentPlayer().cash) {
							currentPlayer().cash -= s.price;
							$$invalidate(0, state.bank.cash += s.price, state);
							return pound(s);
						}

						return;
					}

					// and if none of that is true, but the space is owned by a player, currentPlayer has to pay 'rent' on it by buying an ounce.
					let charge = s.oz;

					//unless they have a discount.
					if (currentPlayer().discount === true) {
						charge = Math.round(s.oz / 2);
					}

					$$invalidate(0, state.message = currentPlayer().name + " paid " + state.players[i].name + " $" + charge + " for " + s.name, state);
					currentPlayer().cash -= charge;
					$$invalidate(0, state.players[i].cash += charge, state);
				}
			});

			i += 1;
		}
	}

	function pound(strain) {
		// watch this, lol
		if (strain.oz >= strain["5lb"]) {
			strain.oz = strain["5lb"] + strain.price;
			return $$invalidate(0, state.message = strain.name + " is over 5lb! $" + strain.oz, state);
		}

		if (strain.oz <= strain["2lb"]) {
			if (strain.oz === strain["2lb"]) {
				return strain.oz = strain["3lb"];
			}

			return strain.oz = strain["2lb"];
		}

		if (strain.oz > strain["3lb"]) {
			if (strain.oz === strain["4lb"]) {
				return strain.oz = strain["5lb"];
			}

			return strain.oz = strain["4lb"];
		}
	}

	function buyPot(strain) {
		let charge = strain.price;

		if (currentPlayer().halfOff === true) {
			charge = Math.round(strain.price / 2);
		}

		currentPlayer().cash -= charge;
		$$invalidate(0, state.bank.cash += charge, state);
		currentPlayer().strains.push(strain);
		$$invalidate(0, state.message = currentPlayer().name + " bought " + strain.name, state);
	}

	function bummer() {
		let index = Math.floor(Math.random() * state.bummers.length);
		let card = state.bummers[index];

		if (state.bummers.length > 1) {
			state.bummers.splice(index, 1);
			return card;
		}

		$$invalidate(0, state.message = "Reset bummers to original state", state);
		$$invalidate(0, state.bummers = _bummers__WEBPACK_IMPORTED_MODULE_5__["default"], state);
		return card;
	}

	function farout() {
		let index = Math.floor(Math.random() * state.farouts.length);
		let card = state.farouts[index];

		if (state.farouts.length > 1) {
			state.farouts.splice(index, 1);
			return card;
		}

		$$invalidate(0, state.message = "Reset farouts to original state", state);
		$$invalidate(0, state.farouts = _farouts__WEBPACK_IMPORTED_MODULE_6__["default"], state);
		return card;
	}

	function gameRoll() {
		let first = dieRoll(1, 6);
		let second = dieRoll(1, 6);
		const total = first + second;
		$$invalidate(0, state.message = currentPlayer().name + " rolled " + first + " + " + second + " = " + total + ". ", state);

		if (first === second) {
			currentPlayer().doubles += 1;
			$$invalidate(0, state.message += "Doubles! Roll again!", state);
		} else {
			currentPlayer().doubles = 0;
		}

		return $$invalidate(0, state.currentRoll = total, state);
	}

	function startGame() {
		gameRoll();
		$$invalidate(0, state.message = "Turn #1", state);
		currentPlayer().space = state.currentRoll;
		drawPlayerPieces();
		let event = _spaces__WEBPACK_IMPORTED_MODULE_4__["default"][currentPlayer().space - 1].effect;
		mapEvents(event);
		$$invalidate(0, state.message = "First roll " + state.currentRoll + " by " + currentPlayer().name + " is on space ", state);
		currentPlayer().space + ", and has $" + currentPlayer().cash;
		return executeTurn();
	}

	function calculateSpaceId() {
		const total = currentPlayer().space + state.currentRoll;

		if (total >= 40) {
			mapEvents("w500");
		}

		let remainder = total % 40;

		//this is silly, why didn't I use zero indexing for the div 
		//ids? refactor html and below someday...
		if (remainder === 0) {
			remainder = 40;
		}

		return remainder;
	}

	function incrementPlayer() {
		$$invalidate(0, state.activePlayerId += 1, state);

		// keep index in sync
		if (state.activePlayerId >= state.players.length) {
			$$invalidate(0, state.activePlayerId = 0, state);
		}

		return currentPlayer();
	}

	function executeTurn() {
		$$invalidate(0, state.turnNumber += 1, state);

		//check for doubles
		if (!currentPlayer().doubles > 0) {
			incrementPlayer();
		}

		// Drop players with no cash from game.
		if (currentPlayer().cash <= 0) {
			// Give us your property and die like a dog
			currentPlayer().strains.forEach(strain => strain.oz = strain.price / 10);

			$$invalidate(0, state.bank.strains = state.bank.strains.concat(currentPlayer().strains), state);
			$$invalidate(0, state.message = currentPlayer().name + " was dropped from the game for being broke at the beginning of their turn. ", state);
			state.players.splice(state.players.indexOf(state.activePlayerId), 1);
			incrementPlayer();
		}

		// then check for a winner
		if (state.players.length === 1) {
			return endGame();
		}

		// check for bank insolvency (done runned out of cash!)
		if (state.bank.cash < 1) {
			return abortGame("bank failure");
		}

		// handle (multiple) skipped turns
		if (state.skipped.includes(state.activePlayerId)) {
			state.skipped.splice(state.skipped.indexOf(state.activePlayerId), 1);
			$$invalidate(0, state.message = "skipped player: " + currentPlayer().name, state);
			return executeTurn();
		}

		// start the turn by rolling dice
		gameRoll();

		// move player to new space
		currentPlayer().space = calculateSpaceId();

		// punish the lucky
		if (currentPlayer().doubles >= 3) {
			$$invalidate(0, state.message = currentPlayer().name + " rolled doubles three consecutive times and was sent to the hospital.", state);
			currentPlayer().doubles = 0;
			mapEvents("hospital");
		}

		// update DOM
		drawPlayerPieces();

		// get the event code
		let event = _spaces__WEBPACK_IMPORTED_MODULE_4__["default"][currentPlayer().space - 1].effect;

		// and fire that shit off
		mapEvents(event);

		// Do it again
		return setTimeout(
			() => {
				executeTurn();
			},
			750
		);
	}

	function endGame() {
		let owned = "";
		let winner = state.players[0];

		if (winner.strains.length === 1) {
			owned = winner.strains[0].name;
		}

		if (winner.strains.length > 1) {
			for (let i = 0; i < winner.strains.length - 1; ) {
				owned += winner.strains[i].name + ", ";
				i += 1;
			}

			owned += "and " + winner.strains[winner.strains.length - 1].name + ". ";
		}

		const turn = state.turnNumber;
		let message = "At the beginning of turn " + turn + ": The Winner is " + winner.name + " with $" + winner.cash + " and " + winner.strains.length + " strains. They owned " + owned + "The bank had $" + state.bank.cash + ". ";

		let endState = {
			turnNumber: state.turnNumber,
			skipped: state.skipped.length,
			players: state.players,
			bank: {
				strains: state.strains,
				cash: state.bank.cash
			},
			jackpot: { cash: state.jackpot.cash }
		};

		var xhr = new XMLHttpRequest();
		xhr.open("POST", "/api/potluck_log", true);
		xhr.setRequestHeader("Content-Type", "application/json");
		xhr.send(JSON.stringify({ value: { message, "state": endState } }));

		// alert(message)
		return window.location.href = "/potluck";
	}

	function drawPlayerPieces() {
		for (let i = 40; i > 0; i -= 1) {
			document.getElementById(i).innerHTML = "";
		}

		state.players.forEach(function (player) {
			document.getElementById(player.space).innerHTML += player.token;
		});
	}

	Object(svelte__WEBPACK_IMPORTED_MODULE_1__["onMount"])(() => {
		drawPlayerPieces();
		startGame();
	});

	return [state, startGame];
}

class Potluck extends svelte_internal__WEBPACK_IMPORTED_MODULE_0__["SvelteComponent"] {
	constructor(options) {
		super();
		if (!document_1.getElementById("svelte-121h6el-style")) add_css();
		Object(svelte_internal__WEBPACK_IMPORTED_MODULE_0__["init"])(this, options, instance, create_fragment, svelte_internal__WEBPACK_IMPORTED_MODULE_0__["safe_not_equal"], {});
	}
}

/* harmony default export */ __webpack_exports__["default"] = (Potluck);

/***/ }),

/***/ "./resources/js/components/potluck/bummers.js":
/*!****************************************************!*\
  !*** ./resources/js/components/potluck/bummers.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var bummers = [{
  id: 1,
  title: "Sneezed instead of snorted - lost two grams of coke",
  effect: "l200"
}, {
  id: 2,
  title: "Posted bond money for 'lost friend'",
  effect: "l1000"
}, {
  id: 3,
  title: "Misplaced your wallet",
  effect: "l200"
}, {
  id: 4,
  title: "Got ripped off for $500",
  effect: "l500"
}, {
  id: 5,
  title: "Dog eats your stash",
  effect: "l5000"
}, {
  id: 6,
  title: "Transmission on your cars goes",
  effect: "l400"
}, {
  id: 7,
  title: "Blew $500 at the track",
  effect: "l500"
}, {
  id: 8,
  title: "Busted for public intoxication",
  effect: "loseTurn"
}, {
  id: 9,
  title: "Your pot has paraquat  &mdash; go to hospital and miss two turns (do not collect $500 for passing Straight Spot)",
  effect: "paraquat"
}, {
  id: 10,
  title: "Involved in car accident",
  effect: "l1000"
}, {
  id: 11,
  title: "Your baggage (constaining 5 lbs. of pot) is lost at the airport",
  effect: "l2000"
}, {
  id: 12,
  title: "Your pot went stale, give the next player to land on a space you own a discount of 50%",
  effect: "reducePot"
}, {
  id: 13,
  title: "Got paranoid and flushed 2 lbs. down the toilet",
  effect: "l2000"
}, {
  id: 14,
  title: "Roach burns your new suit",
  effect: "l300"
}, {
  id: 15,
  title: "Uninsured motorist runs into your house",
  effect: "l2000"
}, {
  id: 16,
  title: "You bum everyone out. Each player pays you the number rolled x 10",
  effect: "bumEveryoneOut"
}];
/* harmony default export */ __webpack_exports__["default"] = (bummers);

/***/ }),

/***/ "./resources/js/components/potluck/farouts.js":
/*!****************************************************!*\
  !*** ./resources/js/components/potluck/farouts.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var farouts = [{
  id: 1,
  title: "Your wealthy relative died and left you $2000 in her will!",
  effect: "w2000"
}, {
  id: 2,
  title: "You win the lottery",
  effect: "w800"
}, {
  id: 3,
  title: "Get out of Hospital Free!",
  effect: "getOutOfHospital"
}, {
  id: 4,
  title: "You win $500 playing cards",
  effect: "w500"
}, {
  id: 5,
  title: "You win jackpot!",
  effect: "jackpot"
}, {
  id: 6,
  title: "Some deadbeat pays you $1200 he has owed you for over a year",
  effect: "w1200"
}, {
  id: 7,
  title: "Found your lost wallet",
  effect: "w200"
}, {
  id: 8,
  title: "This card entitles you to receive one Pound of Pot free! (from the bank) to put on any square you own",
  effect: "freePound"
}, {
  id: 9,
  title: "The bank makes a mistake in your favor!",
  effect: "w300"
}, {
  id: 10,
  title: "Your horse comes through at the track",
  effect: "w1000"
}, {
  id: 11,
  title: "Guy hits your car from behind. You collect $4000 from neck injury suit",
  effect: "w4000"
}, {
  id: 12,
  title: "Your dog finds bag containing $600 in small bills",
  effect: "w600"
}, {
  id: 13,
  title: "You receive income tax return of $1500",
  effect: "w1500"
}, {
  id: 14,
  title: "This card entitles you to roll the dice and receive 100x the number rolled",
  effect: "highRoller"
}, {
  id: 15,
  title: "Pay Lefty - roll the dice and pay player to your left 100x the number rolled",
  effect: "payLefty"
}, {
  id: 16,
  title: "This card entitles you to one deal at 50% discount on any dope (not already purchased) on the board",
  effect: "halfOff"
}];
/* harmony default export */ __webpack_exports__["default"] = (farouts);

/***/ }),

/***/ "./resources/js/components/potluck/players.js":
/*!****************************************************!*\
  !*** ./resources/js/components/potluck/players.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var players = [{
  name: "Alice",
  token: '<div style="display:grid; align-items: center; justify-content: center; background-color:blue; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
  cash: 2875,
  strains: [],
  playing: true,
  space: 40,
  doubles: 0,
  discount: false,
  halfOff: false,
  freePound: false,
  getOutOfHospital: false
}, {
  name: "Barbara",
  token: '<div style="display:grid; align-items: center; justify-content: center; background-color:green; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
  cash: 2875,
  strains: [],
  playing: true,
  space: 40,
  doubles: 0,
  discount: false,
  halfOff: false,
  freePound: false,
  getOutOfHospital: false
}, {
  name: "Carolyn",
  token: '<div style="display:grid; align-items: center; justify-content: center; background-color:yellow; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
  cash: 2875,
  strains: [],
  playing: true,
  space: 40,
  doubles: 0,
  discount: false,
  halfOff: false,
  freePound: false,
  getOutOfHospital: false
}, {
  name: "Dorothy",
  token: '<div style="display:grid; align-items: center; justify-content: center; background-color:orange; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
  cash: 2875,
  strains: [],
  playing: true,
  space: 40,
  doubles: 0,
  discount: false,
  halfOff: false,
  freePound: false,
  getOutOfHospital: false
}, {
  name: "Evelyn",
  token: '<div style="display:grid; align-items: center; justify-content: center; background-color:red; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
  cash: 2875,
  strains: [],
  playing: true,
  space: 40,
  doubles: 0,
  discount: false,
  halfOff: false,
  freePound: false,
  getOutOfHospital: false
}, _defineProperty({
  name: "Fatíma",
  token: '<div style="display:grid; align-items: center; justify-content: center; background-color:purple; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
  cash: 2875,
  strains: [],
  playing: true,
  space: 40,
  doubles: 0,
  discount: false,
  halfOff: false,
  freePound: false,
  getOutOfHospital: false
}, "discount", false), {
  name: "Geraldine",
  token: '<div style="display:grid; align-items: center; justify-content: center; background-color:black; height:1.5vw; width:1.5vw; max-width:15px; max-height:15px; border-radius:50%;"></div>',
  cash: 2875,
  strains: [],
  playing: true,
  space: 40,
  doubles: 0,
  discount: false,
  halfOff: false,
  freePound: false,
  getOutOfHospital: false
}];

function getPlayers(player) {
  return player.playing === true;
}

var activePlayers = players.filter(getPlayers);
/* harmony default export */ __webpack_exports__["default"] = (activePlayers);

/***/ }),

/***/ "./resources/js/components/potluck/spaces.js":
/*!***************************************************!*\
  !*** ./resources/js/components/potluck/spaces.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var spaces = [{
  id: 1,
  title: "Colombian",
  message: "",
  effect: "pot"
}, {
  id: 2,
  title: "Flying Too High",
  message: "Lose a turn",
  effect: "loseTurn"
}, {
  id: 3,
  title: "Home Grown",
  message: "",
  effect: "pot"
}, {
  id: 4,
  title: "Far Out",
  message: "Far Out!",
  effect: "farout"
}, {
  id: 5,
  title: "Wacky Weed",
  message: "",
  effect: "pot"
}, {
  id: 6,
  title: "Gainesville Green",
  message: "",
  effect: "pot"
}, {
  id: 7,
  title: "Downtown Pharmacy",
  message: "",
  effect: "x5"
}, {
  id: 8,
  title: "Thai Stick",
  message: "",
  effect: "pot"
}, {
  id: 9,
  title: "Colombian Red Bud",
  message: "",
  effect: "pot"
}, {
  id: 10,
  title: "Hospital",
  message: "Pay 100x your roll and lose a turn",
  effect: "hospital"
}, {
  id: 11,
  title: "Colombian Chiba",
  message: "",
  effect: "pot"
}, {
  id: 12,
  title: "Tax Man!",
  message: "You Pay 10x",
  effect: "x10"
}, {
  id: 13,
  title: "Guerrero Green",
  message: "",
  effect: "pot"
}, {
  id: 14,
  title: "Midnight Airstrip",
  message: "Pay 20x",
  effect: "x20"
}, {
  id: 15,
  title: "Maui Wowie",
  message: "",
  effect: "pot"
}, {
  id: 16,
  title: "Dealing Square",
  message: "",
  effect: "deal"
}, {
  id: 17,
  title: "Sinsemilla",
  message: "",
  effect: "pot"
}, {
  id: 18,
  title: "The Law:",
  message: "Pay 20x",
  effect: "x20"
}, {
  id: 19,
  title: "Acapulco Gold",
  message: "",
  effect: "pot"
}, {
  id: 20,
  title: "Jackpot",
  message: "You won!",
  effect: "jackpot"
}, {
  id: 21,
  title: "Hawaiian",
  message: "",
  effect: "pot"
}, {
  id: 22,
  title: "Vacation Time. Relax.",
  message: "Lose a Turn",
  effect: "loseTurn"
}, {
  id: 23,
  title: "Bum Me Out",
  message: "",
  effect: "bummer"
}, {
  id: 24,
  title: "Nicaraguan",
  message: "",
  effect: "pot"
}, {
  id: 25,
  title: "Munchies!",
  message: "Pay 10x",
  effect: "x10"
}, {
  id: 26,
  title: "Colombian Gold",
  message: "",
  effect: "pot"
}, {
  id: 27,
  title: "Far Out!",
  message: "",
  effect: "farout"
}, {
  id: 28,
  title: "Just Good Pot",
  message: "",
  effect: "pot"
}, {
  id: 29,
  title: "Just Bad Pot",
  message: "",
  effect: "pot"
}, {
  id: 30,
  title: "Busted...",
  message: "Lose 1 Turn",
  effect: "loseTurn"
}, {
  id: 31,
  title: "Vietnamese",
  message: "",
  effect: "pot"
}, {
  id: 32,
  title: "Stickless Thai",
  message: "",
  effect: "pot"
}, {
  id: 33,
  title: "No Tell Car Rental",
  message: "Pay 10x",
  effect: "x10"
}, {
  id: 34,
  title: "Panama Red",
  message: "",
  effect: "pot"
}, {
  id: 35,
  title: "Mexican",
  message: "",
  effect: "pot"
}, {
  id: 36,
  title: "Dealing Square",
  message: "",
  effect: "deal"
}, {
  id: 37,
  title: "Jamaican",
  message: "",
  effect: "pot"
}, {
  id: 38,
  title: "Bum Me Out",
  message: "",
  effect: "bummer"
}, {
  id: 39,
  title: "Michoacan",
  message: "",
  effect: "pot"
}, {
  id: 40,
  title: "Straight Space",
  message: "",
  effect: "w500"
}];
/* harmony default export */ __webpack_exports__["default"] = (spaces);

/***/ }),

/***/ "./resources/js/components/potluck/strains.js":
/*!****************************************************!*\
  !*** ./resources/js/components/potluck/strains.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var strains = [{
  name: 'Colombian',
  price: 400,
  oz: 40,
  "2lb": 120,
  "3lb": 240,
  "4lb": 360,
  "bale": 400,
  space: 1
}, {
  name: 'Homegrown',
  price: 250,
  oz: 25,
  "2lb": 75,
  "3lb": 150,
  "4lb": 225,
  "bale": 250,
  space: 3
}, {
  name: 'Wacky Weed',
  price: 900,
  oz: 90,
  "2lb": 270,
  "3lb": 540,
  "4lb": 810,
  "bale": 900,
  space: 5
}, {
  name: 'Gainesville Green',
  price: 2000,
  oz: 200,
  "2lb": 600,
  "3lb": 1200,
  "4lb": 1800,
  "bale": 2000,
  space: 6
}, {
  name: 'Thai Stick',
  price: 2200,
  oz: 220,
  "2lb": 660,
  "3lb": 1320,
  "4lb": 1980,
  "bale": 2200,
  space: 8
}, {
  name: 'Colombian Red Bud',
  price: 500,
  oz: 50,
  "2lb": 150,
  "3lb": 300,
  "4lb": 450,
  "bale": 500,
  space: 9
}, {
  name: 'Colombian Chiba',
  price: 600,
  oz: 60,
  "2lb": 180,
  "3lb": 360,
  "4lb": 540,
  "bale": 600,
  space: 11
}, {
  name: 'Guerrero Green',
  price: 400,
  oz: 40,
  "2lb": 120,
  "3lb": 240,
  "4lb": 360,
  "bale": 400,
  space: 13
}, {
  name: 'Maui Wowie',
  price: 2500,
  oz: 250,
  "2lb": 750,
  "3lb": 1500,
  "4lb": 2250,
  "bale": 2500,
  space: 15
}, {
  name: 'Sinsemilla',
  price: 1400,
  oz: 140,
  "2lb": 375,
  "3lb": 750,
  "4lb": 1125,
  "bale": 1400,
  space: 17
}, {
  name: 'Aculpulco Gold',
  price: 500,
  oz: 50,
  "2lb": 150,
  "3lb": 300,
  "4lb": 450,
  "bale": 500,
  space: 19
}, {
  name: 'Hawaiian',
  price: 1600,
  oz: 160,
  "2lb": 480,
  "3lb": 960,
  "4lb": 1440,
  "bale": 1600,
  space: 21
}, {
  name: 'Nicaraguan',
  price: 300,
  oz: 30,
  "2lb": 90,
  "3lb": 180,
  "4lb": 270,
  "bale": 300,
  space: 24
}, {
  name: 'Colombian Gold',
  price: 650,
  oz: 65,
  "2lb": 195,
  "3lb": 390,
  "4lb": 585,
  "bale": 650,
  space: 16
}, {
  name: 'Just Good Pot',
  price: 300,
  oz: 30,
  "2lb": 90,
  "3lb": 180,
  "4lb": 240,
  "bale": 300,
  space: 28
}, {
  name: 'Just Bad Pot',
  price: 100,
  oz: 10,
  "2lb": 30,
  "3lb": 60,
  "4lb": 90,
  "bale": 100,
  space: 29
}, {
  name: 'Vietnamese Pot',
  price: 1000,
  oz: 100,
  "2lb": 300,
  "3lb": 600,
  "4lb": 900,
  "bale": 1000,
  space: 31
}, {
  name: 'Stickless Thai',
  price: 3000,
  oz: 300,
  "2lb": 900,
  "3lb": 1800,
  "4lb": 2700,
  "bale": 3000,
  space: 32
}, {
  name: 'Panama Red',
  price: 800,
  oz: 75,
  "2lb": 225,
  "3lb": 450,
  "4lb": 675,
  "bale": 800,
  space: 34
}, {
  name: 'Mexican',
  price: 150,
  oz: 15,
  "2lb": 45,
  "3lb": 90,
  "4lb": 135,
  "bale": 150,
  space: 35
}, {
  name: 'Jamaican',
  price: 250,
  oz: 25,
  "2lb": 75,
  "3lb": 150,
  "4lb": 225,
  "bale": 250,
  space: 37
}, {
  name: 'Michoacan',
  price: 450,
  oz: 45,
  "2lb": 135,
  "3lb": 270,
  "4lb": 405,
  "bale": 450,
  space: 39
}];
/* harmony default export */ __webpack_exports__["default"] = (strains);

/***/ }),

/***/ "./resources/js/script.js":
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_potluck_Potluck_svelte__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/potluck/Potluck.svelte */ "./resources/js/components/potluck/Potluck.svelte");
 // import App from './components/App.svelte'

var potluck = new _components_potluck_Potluck_svelte__WEBPACK_IMPORTED_MODULE_0__["default"]({
  target: document.querySelector('#potluck')
}); // const app= new App({
//   target: document.querySelector('#rootComponent')
// })
// window.app = app

window.potluck = potluck;
/* harmony default export */ __webpack_exports__["default"] = ({});

/***/ }),

/***/ 0:
/*!****************************************************************!*\
  !*** multi ./resources/js/script.js ./resources/css/style.css ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/jeremy/Code/elbow/resources/js/script.js */"./resources/js/script.js");
module.exports = __webpack_require__(/*! /Users/jeremy/Code/elbow/resources/css/style.css */"./resources/css/style.css");


/***/ })

/******/ });