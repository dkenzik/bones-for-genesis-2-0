<?php

// See https://github.com/FriendsOfPHP/PHP-CS-Fixer for options

$finder = PhpCsFixer\Finder::create()
	->exclude('bower_components')
	->exclude('node_modules')
	->exclude('vendor')
	->in(__DIR__)
;

return PhpCsFixer\Config::create()
	->setUsingCache(true)
	->setRiskyAllowed(true)
	->setRules(
		array(
			'array_syntax' => array(
				'syntax' => 'long'
			),
			'binary_operator_spaces' => array(
				'align_double_arrow' => true,
				'align_equals' => true,
			),
			'blank_line_after_namespace' => true,
			'blank_line_after_opening_tag' => true,
			'blank_line_before_return' => true,
			'cast_spaces' => true,
			'class_keyword_remove' => true,
			'combine_consecutive_unsets' => true,
			'concat_space' => array(
				'spacing' => 'one'
			),
			'declare_equal_normalize' => true,
			'dir_constant' => true,
			'elseif' => true,
			'encoding' => true,
			'ereg_to_preg' => true,
			'full_opening_tag' => true,
			'function_typehint_space' => true,
			'general_phpdoc_annotation_remove' => true,
			'hash_to_slash_comment' => true,
			'heredoc_to_nowdoc' => true,
			'include' => true,
			'line_ending' => true,
			'linebreak_after_opening_tag' => true,
			'lowercase_cast' => true,
			'lowercase_constants' => true,
			'lowercase_keywords' => true,
			'method_argument_space' => true,
			'method_separation' => true,
			'modernize_types_casting' => true,
			'native_function_casing' => true,
			'new_with_braces' => true,
			'no_alias_functions' => true,
			'no_blank_lines_after_class_opening' => true,
			'no_blank_lines_after_phpdoc' => true,
			'no_closing_tag' => true,
			'no_empty_comment' => true,
			'no_empty_phpdoc' => true,
			'no_empty_statement' => true,
			'no_extra_consecutive_blank_lines' => true,
			'no_leading_import_slash' => true,
			'no_leading_namespace_whitespace' => true,
			'no_mixed_echo_print' => true,
			'no_multiline_whitespace_around_double_arrow' => true,
			'no_multiline_whitespace_before_semicolons' => true,
			'no_php4_constructor' => true,
			'no_short_bool_cast' => true,
			'no_short_echo_tag' => true,
			'no_singleline_whitespace_before_semicolons' => true,
			'no_spaces_after_function_name' => true,
			'no_trailing_comma_in_list_call' => true,
			'no_trailing_comma_in_singleline_array' => true,
			'no_trailing_whitespace_in_comment' => true,
			'no_trailing_whitespace' => true,
			'no_unneeded_control_parentheses' => true,
			'no_unreachable_default_argument_value' => true,
			'no_unused_imports' => true,
			'no_useless_return' => true,
			'no_whitespace_before_comma_in_array' => true,
			'no_whitespace_in_blank_line' => true,
			'normalize_index_brace' => true,
			'object_operator_without_whitespace' => true,
			'ordered_imports' => true,
			'phpdoc_align' => true,
			'phpdoc_annotation_without_dot' => true,
			'phpdoc_indent' => true,
			'phpdoc_inline_tag' => true,
			'phpdoc_no_access' => true,
			'phpdoc_no_alias_tag' => true,
			'phpdoc_no_empty_return' => true,
			'phpdoc_no_package' => true,
			'phpdoc_order' => true,
			'phpdoc_scalar' => true,
			'phpdoc_separation' => true,
			'phpdoc_single_line_var_spacing' => true,
			'phpdoc_summary' => true,
			'phpdoc_to_comment' => true,
			'phpdoc_trim' => true,
			'phpdoc_types' => true,
			'phpdoc_var_without_name' => true,
			'pow_to_exponentiation' => true,
			'pre_increment' => true,
			'protected_to_private' => true,
			'psr0' => true,
			'psr4' => true,
			'random_api_migration' => true,
			'return_type_declaration' => true,
			'self_accessor' => true,
			'short_scalar_cast' => true,
			'silenced_deprecation_error' => true,
			'simplified_null_return' => true,
			'single_blank_line_at_eof' => true,
			'single_blank_line_before_namespace' => true,
			'single_class_element_per_statement' => true,
			'single_import_per_statement' => true,
			'single_line_after_imports' => true,
			'single_quote' => true,
			'space_after_semicolon' => true,
			'standardize_not_equals' => true,
			'strict_comparison' => true,
			'strict_param' => true,
			'switch_case_semicolon_to_colon' => true,
			'switch_case_space' => true,
			'ternary_operator_spaces' => true,
			'trailing_comma_in_multiline_array' => true,
			'trim_array_spaces' => true,
			'unary_operator_spaces' => true,
			'visibility_required' => true,
			'whitespace_after_comma_in_array' => true,
		)
	)
	->setFinder($finder)
;