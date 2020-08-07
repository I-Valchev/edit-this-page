# ✏️ edit-this-page
Bolt 4 extension to add Edit page button for Editors on frontend pages.

## Installation

```
composer require ivovalchev/edit-this-page
```

----
## Configuration

By default, the Edit button will appear in the bottom right corner of a record page.
To override this setting, edit `config/extensions/ivovalchev-editthispageextension.yaml`:

```yaml
position: bottom-right # top-left top-right bottom-left bottom-right
```

-----
## Custom styles

By default, the Edit button will take the styles of a button in your theme. To apply
specific styles, you can use the following css selector, e.g.:

```css
.bolt-edit-this-page button {
    background-color: orange;
}
```
