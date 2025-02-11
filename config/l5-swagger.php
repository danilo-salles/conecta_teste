<?php

return [
    'default' => 'default',
    'documentations' => [
        'default' => [
            'api' => [
                'title' => 'My API',
                'description' => 'This is the description of my API.',
                'version' => '1.0.0',
            ],

            'routes' => [
                'api' => 'api/documentation',
                'docs' => 'documentation',
            ],

            'paths' => [
                /*
                 * Edit to include full URL in UI for assets
                 */
                'use_absolute_path' => env('L5_SWAGGER_USE_ABSOLUTE_PATH', true),

                /*
                 * Edit to set path where Swagger UI assets should be stored
                 */
                'swagger_ui_assets_path' => env('L5_SWAGGER_UI_ASSETS_PATH', 'vendor/swagger-api/swagger-ui/dist/'),

                /*
                 * File name of the generated json documentation file
                 */
                'docs_json' => 'api-docs.json',

                /*
                 * File name of the generated YAML documentation file
                 */
                'docs_yaml' => 'api-docs.yaml',

                /*
                 * Set this to `json` or `yaml` to determine which documentation file to use in UI
                 */
                'format_to_use_for_docs' => env('L5_FORMAT_TO_USE_FOR_DOCS', 'json'),

                /*
                 * Absolute paths to directory containing Swagger annotations.
                 */
                'annotations' => [
                    base_path('app'),
                ],
            ],
        ],
    ],
    'defaults' => [
        'routes' => [
            /*
             * Route for accessing parsed Swagger annotations.
             */
            'docs' => 'docs',

            /*
             * Route for OAuth2 authentication callback.
             */
            'oauth2_callback' => 'api/oauth2-callback',

            /*
             * Middleware to prevent unexpected access to API documentation.
             */
            'middleware' => [
                'api' => [],
                'asset' => [],
                'docs' => [],
                'oauth2_callback' => [],
            ],

            /*
             * Route Group options.
             */
            'group_options' => [],
        ],

        'paths' => [
            /*
             * Absolute path to location where parsed annotations will be stored.
             */
            'docs' => storage_path('api-docs'),

            /*
             * Absolute path to directory where to export views.
             */
            'views' => base_path('resources/views/vendor/l5-swagger'),

            /*
             * Edit to set the API's base path.
             */
            'base' => env('L5_SWAGGER_BASE_PATH', null),

            /*
             * Absolute path to directories that should be excluded from scanning.
             */
            'excludes' => [],
        ],

        'scanOptions' => [
            'default_processors_configuration' => [],
            'analyser' => null,
            'analysis' => null,
            'processors' => [],
            'pattern' => null,
            'exclude' => [],
            'open_api_spec_version' => env('L5_SWAGGER_OPEN_API_SPEC_VERSION', \L5Swagger\Generator::OPEN_API_DEFAULT_SPEC_VERSION),
        ],

        /*
         * API security definitions. Will be generated into the documentation file.
         */
        'securityDefinitions' => [
            'securitySchemes' => [
                /*
                'api_key_security_example' => [
                    'type' => 'apiKey',
                    'description' => 'A short description for security scheme',
                    'name' => 'api_key',
                    'in' => 'header',
                ],
                */
            ],
            'security' => [
                /*
                'api_key_security_example' => [],
                */
            ],
        ],

        /*
         * Set this to `true` in development mode to regenerate docs on each request.
         */
        'generate_always' => env('L5_SWAGGER_GENERATE_ALWAYS', false),

        /*
         * Set this to `true` to generate a copy of documentation in YAML format.
         */
        'generate_yaml_copy' => env('L5_SWAGGER_GENERATE_YAML_COPY', false),

        /*
         * Edit to trust the proxy's IP address - needed for AWS Load Balancer.
         */
        'proxy' => false,

        /*
         * Config plugin allows fetching external configs instead of passing them to SwaggerUIBundle.
         */
        'additional_config_url' => null,

        /*
         * Apply a sort to the operation list of each API. Options: 'alpha' | 'method'.
         */
        'operations_sort' => env('L5_SWAGGER_OPERATIONS_SORT', null),

        /*
         * Pass the validatorUrl parameter to SwaggerUI init on the JS side.
         */
        'validator_url' => null,

        /*
         * Swagger UI configuration parameters.
         */
        'ui' => [
            'display' => [
                'dark_mode' => env('L5_SWAGGER_UI_DARK_MODE', false),
                'doc_expansion' => env('L5_SWAGGER_UI_DOC_EXPANSION', 'none'),
                'filter' => env('L5_SWAGGER_UI_FILTERS', true),
            ],

            'authorization' => [
                'persist_authorization' => env('L5_SWAGGER_UI_PERSIST_AUTHORIZATION', false),
                'oauth2' => [
                    'use_pkce_with_authorization_code_grant' => false,
                ],
            ],
        ],

        /*
         * Constants which can be used in annotations.
         */
        'constants' => [
            'L5_SWAGGER_CONST_HOST' => env('L5_SWAGGER_CONST_HOST', 'http://my-default-host.com'),
        ],
    ],
];
