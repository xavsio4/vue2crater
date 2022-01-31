This is a fork of that amazing repo https://github.com/crater-invoice/crater that I adapted to my needs:

## Adapations done

- Added a VAT field in the address model
- Added vat check field (boolean)
- added Laravel/vat extension to check VAT id vs EC's public service
- en, fr and es translations updated

Migrations are provided to add the fields. However, for invoices, the templates are stored in the company_settings table which I updated by hand with the following content:

invoice_company_address_format => <h3><strong>{COMPANY_NAME}</strong></h3><p>{COMPANY_ADDRESS_STREET_1}</p><p>{COMPANY_ADDRESS_STREET_2}</p><p>{COMPANY_ZIP_CODE} {COMPANY_CITY} {COMPANY_STATE}</p><p>{COMPANY_COUNTRY} </p><p class="mt-2">VAT {COMPANY_VAT}</p>

TO BE DONE:

In order to improve communication with an accountant:

- Simplify the payment architecture far to complicated. An expense or invoice is paid or not ...and that's it.
- Batch export invoices and expenses using a range of dates
- Introduce the concept of bill of costs (expenses not done with the company's account but due to the employee who paid with hers/his money)
- Introduce the concept of journal (balance between invoices in and out (sales))
