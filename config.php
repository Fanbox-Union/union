<?php

class Config
{
    // �������� �� ������� � ������ �������� free-kassa.ru
    const MERCHANT_ID = '7777';
    const SECRET_KEY_1 = 'dgffvcf';
    const SECRET_KEY_2 = 'fbdccv';
    
    // ��������� ������ � ���.
    const ITEM_PRICE = 1;

    // ������� ���������� ������, �������� `users`
    const TABLE_ACCOUNT = 'accounts';
    // �������� ���� �� ������� ���������� ������ �� �������� ������������ ����� ��������/�����, �������� `email`
    const TABLE_ACCOUNT_NAME = 'login';
    // �������� ���� �� ������� ���������� ������ ������� ����� ��������� �� ��������� ���������� ������, �������� `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'money';

    // ��������� ���������� � ��
    // ����
    const DB_HOST = 'localhost';
    // ��� ������������
    const DB_USER = 'maloi2k';
    // ������
    const DB_PASS = 'password123';
    // �������� ����
    const DB_NAME = 'db_ccd';
}