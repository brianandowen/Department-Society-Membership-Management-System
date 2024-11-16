<?php
session_start(); // 啟動 session 支援
// 設定角色變數
$isUser = isset($_SESSION['role']) && $_SESSION['role'] === 'U'; // 一般使用者
$isAdmin = isset($_SESSION['role']) && $_SESSION['role'] === 'M'; // 管理者
$nickname = $_SESSION['name'] ?? ''; // 使用者名稱
$role = $_SESSION['role'] ?? ''; // 儲存角色的變數
$username = $_SESSION['username'] ?? ''; // 帳號名稱
