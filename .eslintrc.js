module.exports = {
  'extends': ['eslint:recommended', 'google'],
  'env': {
    // For more environments, see here: http://eslint.org/docs/user-guide/configuring.html#specifying-environments
    'browser': true,
    'node': true,
    'jquery': true,
  },
  'parserOptions': {
    'ecmaVersion': 6
  },
  'rules': {
    'quotes': ['error', 'single'],
    'padded-blocks': 0,
    'max-len': 0,
  }
}
