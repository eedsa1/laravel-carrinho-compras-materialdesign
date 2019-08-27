#pedido
INSERT INTO `pedidos`(`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES (1, 1, 'RE', now(), now())

#valor pivô pedido x produto
INSERT INTO `pedido_produtos`(`id`, `pedido_id`, `produto_id`, `status`, `valor`, `desconto`, `cupom_desconto_id`, `created_at`, `updated_at`) 
VALUES (1, 1, 1, 'RE', 30.00, 0, null , now(), now())

#produto
INSERT INTO `produtos`(`id`, `nome`, `descricao`, `valor`, `imagem`, `ativo`, `created_at`, `updated_at`) 
VALUES (1, 'mouse logitech G302', 'mouse logitech', 22.50, '/images/mouse.jpg', 'S', NOW(), NOW())