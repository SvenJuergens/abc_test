# abc_test
Only a test extension

Use a Clean TYPO3 8 and a clean TYPO3 9 Installation

**Step1**  
Install Extension and create a new page with a new Site TypoScript Template.

**Step2**  
Add fluid_styled_content and add this to setup:

```
page = PAGE
page.10 < styles.content.get

page.15 = TEXT
page.15.value = -----------------
   
page.20 < plugin.tx_abctest_pi1
```

**Step3**  
In the backend add the extension in the column "Normal"

