/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 */

const assumeExternalTargets = function (editorSettings) {
  return typeof editorSettings.link_assume_external_targets === 'boolean' ? editorSettings.link_assume_external_targets : false;
};

const hasContextToolbar = function (editorSettings) {
  return typeof editorSettings.link_context_toolbar === 'boolean' ? editorSettings.link_context_toolbar : false;
};

const getLinkList = function (editorSettings) {
  return editorSettings.link_list;
};

const hasDefaultLinkTarget = function (editorSettings) {
  return typeof editorSettings.default_link_target === 'string';
};

const useQuickLink = function (editorSettings) {
  return editorSettings.link_quicklink === true;
};

const getDefaultLinkTarget = function (editorSettings) {
  return editorSettings.default_link_target;
};

const getTargetList = function (editorSettings) {
  return editorSettings.target_list;
};

const setTargetList = function (editor, list) {
  editor.settings.target_list = list;
};

const shouldShowTargetList = function (editorSettings) {
  return getTargetList(editorSettings) !== false;
};

const getRelList = function (editorSettings) {
  return editorSettings.rel_list;
};

const hasRelList = function (editorSettings) {
  return getRelList(editorSettings) !== undefined;
};

const getLinkClassList = function (editorSettings) {
  return editorSettings.link_class_list;
};

const hasLinkClassList = function (editorSettings) {
  return getLinkClassList(editorSettings) !== undefined;
};

const shouldShowLinkTitle = function (editorSettings) {
  return editorSettings.link_title !== false;
};

const allowUnsafeLinkTarget = function (editorSettings) {
  return typeof editorSettings.allow_unsafe_link_target === 'boolean' ? editorSettings.allow_unsafe_link_target : false;
};

export default {
  assumeExternalTargets,
  hasContextToolbar,
  getLinkList,
  hasDefaultLinkTarget,
  getDefaultLinkTarget,
  getTargetList,
  setTargetList,
  shouldShowTargetList,
  getRelList,
  hasRelList,
  getLinkClassList,
  hasLinkClassList,
  shouldShowLinkTitle,
  allowUnsafeLinkTarget,
  useQuickLink
};