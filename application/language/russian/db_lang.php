<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2018, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Невозможно определить настройки базы данных на основе предоставленной строки соединения.';
$lang['db_unable_to_connect'] = 'Не удается подключиться к серверу базы данных, используя предоставленные настройки.';
$lang['db_unable_to_select'] = 'Не удается выбрать указанную базу данных: %s';
$lang['db_unable_to_create'] = 'Не удается создать указанную базу данных: %s';
$lang['db_invalid_query'] = 'Представленный запрос недействителен.';
$lang['db_must_set_table'] = 'Вы должны установить таблицу базы данных для использования в вашем запросе.';
$lang['db_must_use_set'] = 'Вы должны использовать метод "set" для обновления записи.';
$lang['db_must_use_index'] = 'Вы должны указать индекс для соответствия пакетным обновлениям.';
$lang['db_batch_missing_index'] = 'Одна или несколько строк, представленных для пакетного обновления, не имеют указанного индекса.';
$lang['db_must_use_where'] = 'Обновления не разрешены, если они не содержат условие "where".';
$lang['db_del_must_use_where'] = 'Удаления не разрешены, если они не содержат условие "where" или "like".';
$lang['db_field_param_missing'] = 'Для извлечения полей требуется имя таблицы в качестве параметра.';
$lang['db_unsupported_function'] = 'Эта функция недоступна для используемой вами базы данных.';
$lang['db_transaction_failure'] = 'Сбой транзакции: выполнен откат.';
$lang['db_unable_to_drop'] = 'Не удается удалить указанную базу данных.';
$lang['db_unsupported_feature'] = 'Неподдерживаемая функция платформы базы данных, которую вы используете.';
$lang['db_unsupported_compression'] = 'Выбранный формат сжатия файла не поддерживается вашим сервером.';
$lang['db_filepath_error'] = 'Не удается записать данные по указанному пути.';
$lang['db_invalid_cache_path'] = 'Указанный путь к кэшу недействителен или недоступен для записи.';
$lang['db_table_name_required'] = 'Для этой операции требуется имя таблицы.';
$lang['db_column_name_required'] = 'Для этой операции требуется имя столбца.';
$lang['db_column_definition_required'] = 'Для этой операции требуется определение столбца.';
$lang['db_unable_to_set_charset'] = 'Не удается установить кодировку клиентского соединения: %s';
$lang['db_error_heading'] = 'Произошла ошибка базы данных';
